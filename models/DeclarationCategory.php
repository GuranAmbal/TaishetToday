<?php

namespace app\models;

use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "declaration_category".
 *
 * @property int $id
 * @property string $name
 */
class DeclarationCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'declaration_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
            'name' => 'Name',
        ];
    }
    public function getDeclaration()
    {
        return $this->hasMany(Declaration::className(), ['category_id' => 'id']);
    }
    public static function getAll()
    {
        return DeclarationCategory::find()->all();
    }
    public static function getArticlesByCategory($id)
    {
        $query = Declaration::find()->where(['category_id' => $id]);

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, "pageSize" => 16]);

        // limit the query using the pagination and retrieve the articles
        $decloration = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['decloration'] = $decloration;
        $data['pagination'] = $pagination;

        return $data;
    }
}
