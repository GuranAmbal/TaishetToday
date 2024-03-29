<?php

namespace app\modules\admin\controllers;

use app\models\Category;
use app\models\ImageUpload;
use app\models\ImagesUpload;
use app\models\Tag;
use Yii;
use app\models\Article;
use app\models\ArticleSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{
  /**
   * {@inheritdoc}
   */
  public function behaviors()
  {
    return [
      'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
          'delete' => ['POST'],
        ],
      ],
    ];
  }

  /**
   * Lists all Article models.
   * @return mixed
   */
  public function actionIndex()
  {
    $searchModel = new ArticleSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider->query->orderBy('id desc');

    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  /**
   * Displays a single Article model.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionView($id)
  {
    return $this->render('view', [
      'model' => $this->findModel($id),
    ]);
  }

  /**
   * Creates a new Article model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
    
    $model = new Article();

    if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('create', [
      'model' => $model,
    ]);
  }

  /**
   * Updates an existing Article model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post()) && $model->saveArticle()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('update', [
      'model' => $model,
    ]);
  }

  /**
   * Deletes an existing Article model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionDelete($id)
  {
    $this->findModel($id)->delete();

    return $this->redirect(['index']);
  }

  /*public function actionDeleteEvents()
  {
    
    $query = Article::find()->where(['category_id' => '4'])->asArray()->all();
    $nowDate = date("m-d-y G:i:s"); 
     
    foreach($query as $key) {
      die(strtotime($nowDate));
      if(!empty($key['time']) && strtotime($nowDate) > strtotime($key['time'])) {
        die($key['title']);
      }
     
  }
    
   
    return $this->redirect(['index']);
  }*/
  /**
   * Finds the Article model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Article the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
    if (($model = Article::findOne($id)) !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }

  public function actionSetImage($id)
  {
    $model = new ImageUpload;
    if (Yii::$app->request->isPost) {
      $article = $this->findModel($id);
      $file = UploadedFile::getInstance($model, 'image');

      //var_dump();die;

      if ($article->saveImage($model->uploadFile($file, $article->image))) {
        return $this->redirect(['view', 'id' => $article->id]);
      }
    }

    return $this->render('image', ['model' => $model]);
  }
  public function actionSetImages($id)
  {
    $model = new ImagesUpload;
    if (Yii::$app->request->isPost) {
      $article = $this->findModel($id);

      $model->img_s = UploadedFile::getInstances($model, 'img_s');



      if ($article->saveImages($model->uploadFile($article->img_s))) {
        return $this->redirect(['view', 'id' => $article->id]);
      }
    }

    return $this->render('images', ['model' => $model]);
  }
  public function actionSetCategory($id)
  {

    $article = $this->findModel($id);/*цепляем статью*/
    /*var_dump($article);
    die;*/
    $selectedCategory = $article->category->id;/*готовим значение для формы*/
    $categories = ArrayHelper::map(Category::find()->all(), 'id', 'title');/*выбираем текущий id*/

    if (Yii::$app->request->isPost)/*ловим дропдаун по его названию и передаем методу Save Category*/ {
      $category = Yii::$app->request->post('category');

      if ($article->saveCategory($category))/*все данные передаем в вид*/ {
        return $this->redirect(['view', 'id' => $article->id]);
      }
    }

    return $this->render('category', [
      'article' => $article,
      'selectedCategory' => $selectedCategory,
      'categories' => $categories
    ]);
  }

  public function actionSetTags($id)
  {
    $article = $this->findModel($id);
    $selectedTags = $article->getSelectedTags();
    $tags = ArrayHelper::map(Tag::find()->all(), 'id', 'title');

    if (Yii::$app->request->isPost)/*если форму отправили*/ {
      $tags = Yii::$app->request->post('tags');/*то в переменную кладем все значения из input tags*/

      /*var_dump($tags);die;*/
      $article->saveTags($tags);
      return $this->redirect(['view', 'id' => $article->id]);/*перенаправим пользователя на страницу view*/
    }

    return $this->render('tags', [
      'selectedTags' => $selectedTags,
      'tags' => $tags

    ]);
  }
}
