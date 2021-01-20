<?php

use yii\db\Migration;

/**
 * Class m210112_230707_add_img_s_column
 */
class m210112_230707_add_img_s_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'img_s', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'img_s');
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
