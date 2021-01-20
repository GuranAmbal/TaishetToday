<?php

use yii\db\Migration;

/**
 * Class m180825_060742_add_smdescription
 */
class m180825_060742_add_smdescription extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->addColumn('article', 'smdeskription', $this->text());
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
        echo "m180825_060742_add_smdescription cannot be reverted.\n";

        return false;
    }
    */
}
