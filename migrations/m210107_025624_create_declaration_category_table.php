<?php

use yii\db\Migration;

/**
 * Handles the creation of table `declaration_category`.
 */
class m210107_025624_create_declaration_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('declaration_category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('declaration_category');
    }
}
