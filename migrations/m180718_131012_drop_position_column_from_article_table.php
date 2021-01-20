<?php

use yii\db\Migration;

/**
 * Handles dropping position from table `article`.
 */
class m180718_131012_drop_position_column_from_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('article', 'position');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('article', 'position', $this->text());
    }
}
