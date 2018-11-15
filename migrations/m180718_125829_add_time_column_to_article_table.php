<?php

use yii\db\Migration;

/**
 * Handles adding time to table `article`.
 */
class m180718_125829_add_time_column_to_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('article', 'time', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('article', 'time');
    }
}
