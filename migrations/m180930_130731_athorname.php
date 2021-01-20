<?php

use yii\db\Migration;

/**
 * Class m180930_130731_athorname
 */
class m180930_130731_athorname extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function safeUp()
     {
   $this->addColumn('article', 'athorname', $this->text());
     }

     /**
      * {@inheritdoc}
      */
     public function safeDown()
     {
         $this->dropColumn('article', 'athorname');
     }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180930_130731_athorname cannot be reverted.\n";

        return false;
    }
    */
}
