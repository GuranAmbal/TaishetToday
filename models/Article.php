<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $date
 * @property string $image
 * @property int $viewed
 * @property int $user_id
 * @property int $status
 * @property int $category_id
 *
 * @property ArticleTag[] $articleTags
 * @property Comment[] $comments
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
          [['title'], 'required'],
          [['title','description','content','time','adress', 'telefon','smdeskription','keywords','athorname', 'money'], 'string'],
          [['date'], 'date', 'format'=>'php:Y-m-d'],
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
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
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
      $imageUploadModel -> deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
      $this->deleteImage();
      return parent::beforeDelete();
    }
    public function saveArticle()
      {
        $this->user_id = Yii::$app->user->id;
        return $this->save();
      }
    public function getCategory()
   {
       return $this->hasOne(Category::className(), ['id' => 'category_id']);
   }

   public function saveCategory($category_id)/*ловим выбираем категорию которую хотим привязать к этой модели*/
   {
     $category=Category::findOne($category_id);
     if($category != null)/*проверяем*/
     {
       $this ->link('category', $category);/*здесь прописываем название нашей связи затем передаем с кем связывать*/
       return true;
     }
   }

   public function getTags()
    {
        return $this->hasMany(Tag::className(), ['id' => 'tag_id'])
            ->viaTable('article_tag', ['article_id' => 'id']);
    }

    public function getSelectedTags()
    {
      $selectedTags = $this->getTags()->select('id')->asArray()->all();/*вытащить все теги связанные с данной статьей и из них выбрать только их id*/
      return ArrayHelper::getColumn($selectedTags,'id');
    }
    public function saveTags($tags)/*сохранение тегов и удаление предыдущих*/
    {
      if(is_array($tags))
      {
        $this->clearCurrentTags();/*удаление всех предыдущих тегов*/
        foreach($tags as $tag_id)
        {
          $tag=Tag::findOne($tag_id);
          $this->link('tags', $tag);
        }
      }
    }
public function clearCurrentTags()
{
  ArticleTag::deleteAll(['article_id'=>$this->id]);
}

public function getDate()
{
    return Yii::$app->formatter->asDate($this->date);
}

public static function getAll($pageSize = 4)
  {
  // build a DB query to get all articles with status = 1
$query = Article::find();

// get the total number of articles (but do not fetch the article data yet)
$count = $query->count();

// create a pagination object with the total count
$pagination = new Pagination(['totalCount' => $count, "pageSize"=>$pageSize]);

// limit the query using the pagination and retrieve the articles
$articles = $query->offset($pagination->offset)
->limit($pagination->limit)
->all();

$data['articles'] = $articles;
$data['pagination'] = $pagination;

return $data;

  }

public static function getPopular()
  {
    return Article::find()->orderBy('viewed desc')->limit(2)->all();
  }

public static function getRecent()
  {
    return Article::find()->orderBy('category_id, date asc')->where(['category_id'=>4])->limit(2)->all();
  }
public function getComments()
      {
          return $this->hasMany(Comment::className(), ['article_id'=>'id']);
      }
public function getArticleComments()
      {
        return $this->getComments()->where(['status'=>1])->all();
      }
public static function getOneCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>9])->limit(4)->all();
  }
public static function getTwoCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>7])->limit(4)->all();
  }
public static function getThreeCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>8])->limit(4)->all();
  }
public static function getForeCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>6])->limit(4)->all();
  }
public static function getFiveCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>11])->limit(4)->all();
  }
public static function getSixCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>12])->limit(4)->all();
  }
public static function getSevenCategory()
  {
    return Article::find()->orderBy('category_id desc, date desc')->where(['category_id'=>4])->limit(10)->all();
  }
public static function getEightCategory()
  {
    return Article::find()->orderBy('category_id desc')->where(['category_id'=>13])->limit(4)->all();
  }
public static function getNineCategory()
  {
        return Article::find()->orderBy('category_id desc')->where(['category_id'=>14])->limit(4)->all();
  }
public static function getTenCategory()
  {
        return Article::find()->orderBy('category_id desc')->where(['category_id'=>15])->limit(4)->all();
  }
public static function getElCategory()
  {
        return Article::find()->orderBy('category_id desc')->where(['category_id'=>16])->limit(4)->all();
  }
public static function getTwelveCategory()
  {
        return Article::find()->orderBy('category_id desc')->where(['category_id'=>17])->limit(4)->all();
  }
public function getAthor()
{
  return $this->hasOne(User::className(), ['id'=>'user_id']);
}
public function viewedCounter()
{
  $this->viewed +=1;
  return $this->save(false);
}
public function countClabs(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>15])->count();
}
public function countSport(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>9])->count();
}
public function countRest(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>7])->count();
}
public function countCafe(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>8])->count();
}
public function countHospital(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>16])->count();
}
public function countTransport(){
	return Article::find()->orderBy('category_id desc')->where(['category_id'=>17])->count();
}
}
