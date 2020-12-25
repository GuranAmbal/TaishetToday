<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use app\models\Article;
use app\models\Category;
use app\models\CommentForm;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SearchForm;
use app\models\ArticleSearch;
use app\models\TagSearch;
use app\models\Massage;
use app\models\ArticleTag;
use app\models\Timetables;
use app\models\TimetableSearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;




class SiteController extends Controller
{
  /**
  * {@inheritdoc}
  */
  public function beforeAction($action)
  {
    $model = new SearchForm();
    if($model->load(Yii::$app->request->post()) && $model->validate())
    {
      $q=Html::encode($model->q);
      return $this->redirect(Yii::$app->urlManager->createUrl(['site/search','q'=>$q]));

    }
    return true;
  }
  public function actionSearch()
  {
    $q = Yii::$app->getRequest()->getQueryParam('q');
    $query = Article::find()->where(['hide'=>0])->where(['like','content', $q])->orWhere(['like','title', $q]);
    $pagination = new Pagination([
      'defaultPageSize'=>5,
      'totalCount'=>$query->count(),
    ]);
    $articles = $query->offset($pagination->offset)
    ->limit($pagination->limit)
    ->all();
    Article::getRecent($articles);
    return $this->render('search',[
      'articles'=>$articles,
      'q'=>$q,
      'pagination'=>$pagination,
    ]);
  }
  public function behaviors()
  {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'only' => ['logout'],
        'rules' => [
          [
            'actions' => ['logout'],
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'logout' => ['post'],
        ],
      ],
    ];
  }

  /**
  * {@inheritdoc}
  */
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        'class' => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
    ];
  }

  /**
  * Displays homepage.
  *
  * @return string
  */
  public function actionIndex()
  {
    
    $data =  Article:: getAll();
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $events = Article::getEvents();
    $places = Article::getAllMain();
    $history = Article::getAllHistory();
    $categoryPlace = Category::getAllPlace();
    $categoryHistory = Category::getAllHistory();
    $searchModel = new ArticleSearch();
    $schedules = $searchModel->search(Yii::$app->request->queryParams);
    $schedules->query->andFilterWhere(['tag_id'=>9]);
   
    return $this->render('index',[
      
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'events'=>$events,
      'places'=>$places,
      'history'=>$history,
      'categoryPlace'=>$categoryPlace,
      'categoryHistory'=>$categoryHistory,
      'schedules'=>$schedules
     
    ]);
  }

  /**
  * Login action.
  *
  * @return Response|string
  */

  public function actionContact()
  {
    $model = new ContactForm();
    if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
      Yii::$app->session->setFlash('contactFormSubmitted');

      return $this->refresh();
    }
    return $this->render('contact', [
      'model' => $model,
    ]);
  }

  /**
  * Displays about page.
  *
  * @return string
  */
  public function actionAbout()
  {
    $data =  Article:: getAll();
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categories = Category::getAll();
    return $this->render('about',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'categories'=>$categories,
    ]);
  }


  public function actionHistory($id)
  {
    $data = Category::getArticlesByCategory($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categoryHistory = Category::getAllHistory();
    $category=Category::findOne($id);
    return $this->render('history-category',[
      'category'=>$category,
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'categoryHistory'=>$categoryHistory,
    ]);
  }

  public function actionEventCategory($id)
  {
    $data = Category::getArticlesByCategory($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categoryPlace = Category::getAllPlace();
    $category=Category::findOne($id);
    return $this->render('event-category',[
      'category'=>$category,
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'categoryPlace'=>$categoryPlace,
    ]);
  }

 
  public function actionView($id)
  {
    $data = Category::getArticlesByCategory($id);
    $article=Article::findOne($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categoryPlace = Category::getAllPlace();
    $categoryHistory = Category::getAllHistory();
    $comments = $article->getArticleComments();
    $commentForm = new CommentForm();
    $article -> viewedCounter();
    return $this->render('view',[
      'description'=>str_replace('&nbsp;', ' ', strip_tags($article->description)),
      'article'=>$article,
      'popular'=>$popular,
      'recent'=>$recent,
      'categoryPlace'=>$categoryPlace, 
      'categoryHistory'=>$categoryHistory,
      'comments'=>$comments,
      'commentForm'=>$commentForm,
    ]);
  }

  public function actionHistorical()
  {
    $data =  Article:: getAll();
    $popular = Article::getPopularHistory();
    $recent = Article::getRecent();
    $history = Article::getAllHistoryCategorys();
    $categoryHistory = Category::getAllHistory();
   

   
    return $this->render('historical',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'history'=>$history,
      'categoryHistory'=>$categoryHistory,
    ]);
  }
  public function actionEvents()
  {

    $data =  Article:: getAll();
    $popular = Article::getPopularEvents();
    $recent = Article::getRecent();
    $events = Article::getEvents();
    $categoryPlace = Category::getAllPlace();
    return $this->render('events',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'events'=>$events,
      'categoryPlace'=>$categoryPlace,
    ]);
  }
  public function actionPlaces()
  {

    $data =  Article:: getAll();
    $popular = Article::getPopularPlaces();
    $recent = Article::getRecent();
    $places = Article::getAllMain();
    $categoryPlace = Category::getAllPlace();
    return $this->render('places',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'places'=> $places,
      'categoryPlace'=>$categoryPlace,
    ]);
  }
  public function actionComment($id)
  {
    $model = new CommentForm();

    if(Yii::$app->request->isPost)
    {
      $model->load(Yii::$app->request->post());
      if($model->saveComment($id))
      {
        Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий будет скоро добавлен');
        return $this->redirect(['site/view','id'=>$id]);
      }
    }
  }

  public function actionTelefon()
  {

    $searchModel = new ArticleSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider->query->andFilterWhere(['tag_id'=>2]);


    return $this->render('telefon', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);

  }
  

 

}
