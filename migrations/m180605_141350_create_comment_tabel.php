<?php

use yii\db\Migration;

/**
 * Class m180605_141350_create_comment_tabel
 */
class m180605_141350_create_comment_tabel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('comment', [
           'id' => $this->primaryKey(),
           'text'=>$this->string(),
           'user_id'=>$this->integer(),
           'article_id'=>$this->integer(),
           'status'=>$this->integer()
       ]);
       // creates index for column `user_id`
       $this->createIndex(
           'idx-post-user_id',
           'comment',
           'user_id'
       );
       // add foreign key for table `user`
       $this->addForeignKey(
           'fk-post-user_id',
           'comment',
           'user_id',
           'user',
           'id',
           'CASCADE'
       );
       // creates index for column `article_id`
       $this->createIndex(
           'idx-article_id',
           'comment',
           'article_id'
       );
       // add foreign key for table `article`
       $this->addForeignKey(
           'fk-article_id',
           'comment',
           'article_id',
           'article',
           'id',
           'CASCADE'
       );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180605_141350_create_comment_tabel cannot be reverted.\n";

        return false;
    }
    */
}
