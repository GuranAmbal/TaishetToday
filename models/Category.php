<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 */
class Category extends \yii\db\ActiveRecord
{
  /**
   * {@inheritdoc}
   */
  public static function tableName()
  {
    return 'category';
  }

  /**
   * {@inheritdoc}
   */
  public function rules()
  {
    return [
      [['title'], 'string', 'max' => 255],
      [['description'], 'string'],
      [['keywords'], 'string'],
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
      'keywords' => 'Keywords'
    ];
  }

  public function getArticles()
  {
    return $this->hasMany(Article::className(), ['category_id' => 'id']);
  }

  public function getArticlesCount()
  {
    return $this->getArticles()->count();
  }
  public static function getAll()
  {
    return Category::find()->all();
  }
  public static function getAllPlace()
  {
    return Category::find()->where(['id' => [4, 7, 8, 9, 15, 16, 17, 18, 19]])->all();
  }
  public static function getAllHistory()
  {
    return Category::find()->where(['id' => [6, 11, 12, 13, 14, 20, 21]])->all();
  }
  public static function getArticlesByCategory($id)
  {
    $query = Article::find()->where(['category_id' => $id]);

    // get the total number of articles (but do not fetch the article data yet)
    $count = $query->count();

    // create a pagination object with the total count
    $pagination = new Pagination(['totalCount' => $count, "pageSize" => 16]);

    // limit the query using the pagination and retrieve the articles
    $articles = $query->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

    $data['articles'] = $articles;
    $data['pagination'] = $pagination;

    return $data;
  }
}
