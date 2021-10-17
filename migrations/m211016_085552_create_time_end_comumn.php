<?php

use yii\db\Migration;

/**
 * Class m211016_085552_create_time_end_comumn
 */
class m211016_085552_create_time_end_comumn extends Migration
{
     /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'time_end', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'time_end');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210112_230707_add_img_s_column cannot be reverted.\n";

        return false;
    }
    */
}
