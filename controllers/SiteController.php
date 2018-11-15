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
      $query = Article::find()->where(['hide'=>0])->where(['like','description', $q]);
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
      $onecategory = Article::getOneCategory();
      $twocategory = Article::getTwoCategory();
      $threecategory = Article::getThreeCategory();
      $tencategory = Article::getTenCategory();
      $elcategory = Article::getElCategory();
      $categories = Category::getAll();
              return $this->render('index',[
                'articles'=>$data['articles'],
                'pagination'=>$data['pagination'],
                'popular'=>$popular,
                'recent'=>$recent,
                'onecategory'=>$onecategory,
                'twocategory'=>$twocategory,
                'threecategory'=>$threecategory,
                'tencategory'=>$tencategory,
                'elcategory'=>$elcategory,
                'categories'=>$categories,
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

  /*  public function actionMap()
    {
    $data = Category::getArticlesByCategory($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categories = Category::getAll();
    return $this->render('map',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'categories'=>$categories,
    ]);
  }*/

    public function actionHistory($id)
    {
      $data = Category::getArticlesByCategory($id);
      $popular = Article::getPopular();
      $recent = Article::getRecent();
      $categories = Category::getAll();
      return $this->render('history',[
        'articles'=>$data['articles'],
        'pagination'=>$data['pagination'],
        'popular'=>$popular,
        'recent'=>$recent,
        'categories'=>$categories,
      ]);
    }

    public function actionHappends($id)
    {
    $data = Category::getArticlesByCategory($id);
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categories = Category::getAll();
    return $this->render('happends',[
      'articles'=>$data['articles'],
      'pagination'=>$data['pagination'],
      'popular'=>$popular,
      'recent'=>$recent,
      'categories'=>$categories,
    ]);
    }

    public function actionInfo()
    {
    $data = Article:: getAll();
    $popular = Article::getPopular();
    $recent = Article::getRecent();
    $categories = Category::getAll();
            return $this->render('info',[
              'articles'=>$data['articles'],
              'pagination'=>$data['pagination'],
              'popular'=>$popular,
              'recent'=>$recent,
              'categories'=>$categories,
        ]);
    }
    public function actionView($id)
    {

        $article=Article::findOne($id);
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $categories = Category::getAll();
        $comments = $article->getArticleComments();
        $commentForm = new CommentForm();
        $article -> viewedCounter();
        return $this->render('view',[
          'article'=>$article,
          'popular'=>$popular,
          'recent'=>$recent,
          'categories'=>$categories,
          'comments'=>$comments,
          'commentForm'=>$commentForm,
        ]);
    }
    public function actionPlace()
    {
        $data =  Article:: getAll();
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $forecategory = Article::getForeCategory();
        $fivecategory = Article::getFiveCategory();
        $sixcategory = Article::getSixCategory();
        $eightcategory = Article::getEightCategory();
        $ninecategory = Article::getNineCategory();
        $tencategory = Article::getTenCategory();
        $categories = Category::getAll();
        return $this->render('place',[
          'articles'=>$data['articles'],
          'pagination'=>$data['pagination'],
          'popular'=>$popular,
          'recent'=>$recent,
          'forecategory'=>$forecategory,
          'fivecategory'=>$fivecategory,
          'sixcategory'=>$sixcategory,
          'eightcategory'=>$eightcategory,
          'ninecategory'=>$ninecategory,
          'tencategory'=>$tencategory,
          'categories'=>$categories,
    ]);
    }
    public function actionInformation()
    {
        $data =  Article:: getAll();
        $popular = Article::getPopular();
        $recent = Article::getRecent();
        $sevencategory = Article::getSevenCategory();
        $categories = Category::getAll();
        return $this->render('information',[
          'articles'=>$data['articles'],
          'pagination'=>$data['pagination'],
          'popular'=>$popular,
          'recent'=>$recent,
          'sevencategory'=>$sevencategory,
          'categories'=>$categories,
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
}
