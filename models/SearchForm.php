<?php

namespace app\models;

use Yii;
use yii\base\Model;


class SearchForm extends Model
{
    public $q;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
['q','string'],
        ];
    }


}
