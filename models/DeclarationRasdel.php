<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "declaration_rasdel".
 *
 * @property int $id
 * @property string $name
 */
class DeclarationRasdel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'declaration_rasdel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
    public function getRazdel()
    {
      return $this->hasMany(Declaration::className(),['category_id' => 'id']);
    }
}
