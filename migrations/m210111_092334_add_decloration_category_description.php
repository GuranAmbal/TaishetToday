<?php

use yii\db\Migration;

/**
 * Class m210111_092334_add_decloration_category_description
 */
class m210111_092334_add_decloration_category_description extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('declaration_category', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('declaration_category', 'description');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_092334_add_decloration_category_description cannot be reverted.\n";

        return false;
    }
    */
}
