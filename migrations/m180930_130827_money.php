<?php

use yii\db\Migration;

/**
 * Class m180930_130827_money
 */
class m180930_130827_money extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
     {
 $this->addColumn('article', 'money', $this->text());
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropColumn('article', 'money');
     }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_130827_money cannot be reverted.\n";

        return false;
    }
    */
}
