<?php

use yii\db\Migration;

/**
 * Handles the creation of table `declaration`.
 */
class m210107_025521_create_declaration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('declaration', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'user_id'=>$this->integer(),
            'category_id'=>$this->integer(),
            'date'=>$this->date(),
            'image'=>$this->string(),
            'viewed'=>$this->integer(),
            'id_razd'=>$this->integer(),
            'is_actual'=>$this->integer()->defaultValue(0),
            'adress'=>$this->string(),
            'telefon'=>$this->string(),
            'vk'=>$this->string(),
            'ok'=>$this->string(),
            'confurm'=>$this->integer(),
            'time_over'=>$this->date(),
            'price'=>$this->string(),
            'img_s'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('declaration');
    }
}
