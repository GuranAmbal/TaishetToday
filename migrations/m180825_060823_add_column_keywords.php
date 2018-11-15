<?php

use yii\db\Migration;

/**
 * Class m180825_060823_add_column_keywords
 */
class m180825_060823_add_column_keywords extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->addColumn('article', 'keywords', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropColumn('article', 'smdeskription');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180825_060823_add_column_keywords cannot be reverted.\n";

        return false;
    }
    */
}
