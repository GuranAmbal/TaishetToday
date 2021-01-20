<?php

use yii\db\Migration;

/**
 * Handles the creation of table `declaration_rasdel`.
 */
class m210107_031719_create_declaration_rasdel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('declaration_rasdel', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('declaration_rasdel');
    }
}
