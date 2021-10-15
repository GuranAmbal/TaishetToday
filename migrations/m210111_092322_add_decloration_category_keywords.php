<?php

use yii\db\Migration;

/**
 * Class m210111_092322_add_decloration_category_keywords
 */
class m210111_092322_add_decloration_category_keywords extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('declaration_category', 'keywords', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('declaration_category', 'keywords');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210111_092322_add_decloration_category_keywords cannot be reverted.\n";

        return false;
    }
    */
}
