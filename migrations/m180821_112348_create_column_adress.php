<?php

use yii\db\Migration;

/**
 * Class m180821_112348_create_column_adress
 */
class m180821_112348_create_column_adress extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
  $this->addColumn('article', 'adress', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
          $this->dropColumn('article', 'adress');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180821_112348_create_column_adress cannot be reverted.\n";

        return false;
    }
    */
}
