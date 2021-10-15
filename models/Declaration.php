<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "declaration".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $user_id
 * @property int $category_id
 * @property string $date
 * @property string $image
 * @property int $viewed
 * @property int $id_razd
 * @property int $is_actual
 * @property string $adress
 * @property string $telefon
 * @property string $vk
 * @property string $ok
 * @property int $confurm
 * @property string $time_over
 * @property string $price
 * @property string $img_s
 */
class Declaration extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'declaration';
  }

  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['title'], 'required'],
      [['title', 'image', 'adress', 'telefon', 'vk', 'ok', 'price', 'img_s', 'description'], 'string'],
      [['date'], 'date', 'format' => 'php:Y-m-d'],
      [['date'], 'default', 'value' => date('Y-m-d')],
      [['title'], 'string', 'max' => 255],


    ];
  }

  /**
   * {@inheritdoc}
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'title' => 'Title',
      'description' => 'Description',
      'user_id' => 'User ID',
      'category_id' => 'Category ID',
      'date' => 'Date',
      'image' => 'Image',
      'viewed' => 'Viewed',
      'id_razd' => 'Id Razd',
      'is_actual' => 'Is Actual',
      'adress' => 'Adress',
      'telefon' => 'Telefon',
      'vk' => 'Vk',
      'ok' => 'Ok',
      'confurm' => 'Confurm',
      'time_over' => 'Time Over',
      'price' => 'Price',
      'img_s' => 'Img S',

    ];
  }
  public function saveImage($filename)
  {
    $this->image = $filename;
    return $this->save(false);
  }
  public function getImage()
  {

    return ($this->image) ? '/uploades/' . $this->image : '/no-image.png';
  }

  public function deleteImage()
  {
    $imageUploadModel = new ImageUpload();
    $imageUploadModel->deleteCurrentImage($this->image);
  }
  public function saveImages($filename)
  {
    $this->img_s = $filename;
    return $this->save(false);
  }
  public function deleteImages()
  {
    $imageUploadModel = new ImagesUpload();
    $imageUploadModel->deleteCurrentImage($this->img_s);
  }
  public function getImages()
  {
    $pieces = explode(", ", $this->img_s);

    return ($this->img_s) ? $pieces : '';
  }
  public function beforeDelete()
  {
    $this->deleteImage();
    $this->deleteImages();
    return parent::beforeDelete();
  }

  public function getCategory()
  {
    return $this->hasOne(DeclarationCategory::className(), ['id' => 'category_id']);
  }
  public function saveCategory($category_id)/*ловим выбираем категорию которую хотим привязать к этой модели*/
  {
    $category = DeclarationCategory::findOne($category_id);
    if ($category != null)/*проверяем*/ {
      $this->link('category', $category);/*здесь прописываем название нашей связи затем передаем с кем связывать*/
      return true;
    }
  }
  public function getRasdel()
  {
    return $this->hasOne(DeclarationRasdel::className(), ['id' => 'id_razd']);
  }
  public function saveRasdel($category_id)/*ловим выбираем категорию которую хотим привязать к этой модели*/
  {

    $rasdel = DeclarationRasdel::findOne($category_id);

    if ($rasdel != null)/*проверяем*/ {

      $this->link('rasdel', $rasdel);/*здесь прописываем название нашей связи затем передаем с кем связывать*/
      return true;
    }
  }
  public function getUsers()
  {
    return $this->hasOne(User::className(), ['id' => 'user_id']);
  }
  public function saveUser($category_id)/*ловим выбираем категорию которую хотим привязать к этой модели*/
  {

    $user = User::findOne($category_id);

    if ($user != null)/*проверяем*/ {

      $this->link('users', $user);/*здесь прописываем название нашей связи затем передаем с кем связывать*/
      return true;
    }
  }
  public static function getAll($pageSize = 10)
  {
    // build a DB query to get all articles with status = 1
    $query = Declaration::find()->where(['is_actual' => 1]);

    // get the total number of articles (but do not fetch the article data yet)
    $count = $query->count();

    // create a pagination object with the total count
    $pagination = new Pagination(['totalCount' => $count, "pageSize" => $pageSize]);

    // limit the query using the pagination and retrieve the articles
    $declaration = $query->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

    $data['declaration'] = $declaration;
    $data['pagination'] = $pagination;

    return $data;
  }
  public static function getPopular()
  {
    return Declaration::find()->orderBy('viewed desc')->limit(2)->all();
  }

  public static function getRecent()
  {
    return Declaration::find()->orderBy('category_id, date desc')->limit(4)->all();
  }

  public function viewedCounter()
  {
    $this->viewed += 1;
    return $this->save(false);
  }
  public function getDate()
  {
    return Yii::$app->formatter->asDate($this->date);
  }
}
