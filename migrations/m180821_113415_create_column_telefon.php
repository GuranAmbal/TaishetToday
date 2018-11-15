<?php

use yii\db\Migration;

/**
 * Class m180821_113415_create_column_telefon
 */
class m180821_113415_create_column_telefon extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->addColumn('article', 'telefon', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
          $this->dropColumn('article', 'telefon');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180821_113415_create_column_telefon cannot be reverted.\n";

        return false;
    }
    */
}
