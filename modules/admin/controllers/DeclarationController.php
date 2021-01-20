<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Declaration;
use app\models\DeclarationCategory;
use app\models\DeclarationRasdel;
use dektrium\user\models\User;
use app\models\DeclarationSearch;
use app\models\ImageUpload;
use app\models\ImagesUpload;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;

/**
 * DeclarationController implements the CRUD actions for Declaration model.
 */
class DeclarationController extends Controller
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
   * Lists all Declaration models.
   * @return mixed
   */
  public function actionIndex()
  {
    $searchModel = new DeclarationSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
  }

  /**
   * Displays a single Declaration model.
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
   * Creates a new Declaration model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
    $model = new Declaration();

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('create', [
      'model' => $model,
    ]);
  }

  /**
   * Updates an existing Declaration model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
    $model = $this->findModel($id);

    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['view', 'id' => $model->id]);
    }

    return $this->render('update', [
      'model' => $model,
    ]);
  }

  /**
   * Deletes an existing Declaration model.
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

  /**
   * Finds the Declaration model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Declaration the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
    if (($model = Declaration::findOne($id)) !== null) {
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

    if (isset($article->category->id)) {
      $selectedCategory = $article->category->id;
    } else {
      $selectedCategory = 1;
    }
    /*готовим значение для формы*/
    $categories = ArrayHelper::map(DeclarationCategory::find()->all(), 'id', 'name');/*выбираем текущий id*/

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

  public function actionSetRazdel($id)
  {

    $article = $this->findModel($id);/*цепляем статью*/
    //var_dump($article->rasdel);die;
    if (isset($article->rasdel->id)) {
      $selectedRasdel = $article->rasdel->id;
    } else {
      $selectedRasdel = 1;
    }
    /*готовим значение для формы*/
    $rasdels = ArrayHelper::map(DeclarationRasdel::find()->all(), 'id', 'name');/*выбираем текущий id*/

    if (Yii::$app->request->isPost)/*ловим дропдаун по его названию и передаем методу Save Category*/ {
      $rasdel = Yii::$app->request->post('rasdel');
      //var_dump("ok",$category);die;
      if ($article->saveRasdel($rasdel))/*все данные передаем в вид*/ {

        return $this->redirect(['view', 'id' => $article->id]);
      }
    }

    return $this->render('rasdels', [
      'article' => $article,
      'selectedRasdel' => $selectedRasdel,
      'rasdels' => $rasdels
    ]);
  }
  public function actionSetUsers($id)
  {

    $article = $this->findModel($id);/*цепляем статью*/
    //var_dump($article->rasdel);die;
    if (isset($article->rasdel->id)) {
      $selectedUsers = $article->rasdel->id;
    } else {
      $selectedUsers = 1;
    }
    /*готовим значение для формы*/
    $users = ArrayHelper::map(User::find()->all(), 'id', 'username');/*выбираем текущий id*/

    if (Yii::$app->request->isPost)/*ловим дропдаун по его названию и передаем методу Save Category*/ {
      $user = Yii::$app->request->post('user');
      //var_dump("ok",$category);die;
      if ($article->saveUser($user))/*все данные передаем в вид*/ {

        return $this->redirect(['view', 'id' => $article->id]);
      }
    }

    return $this->render('users', [
      'article' => $article,
      'selectedUsers' => $selectedUsers,
      'users' => $users
    ]);
  }
}
