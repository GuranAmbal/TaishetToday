<?php
use yii\db\Migration;
/**
 * Handles the creation of table `category`.
 */
class m180605_141602_create_category_tabel extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()
        ]);
    }
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
