<?php

use yii\db\Migration;

/**
 * Class m211024_133441_news
 */
class m211024_133441_news extends Migration
{
    public function safeUp()
    {
        $this -> createTable('news',[
            'id' => $this -> primaryKey(),
            'title' => $this ->string(255) -> notNull(),
            'short_description' => $this ->  string(255) -> notNull(),
            'description' => $this -> text(),
            'content' => $this -> text(),
            'created_at' => $this -> date(),
            'status' => $this ->smallInteger() -> notNull() -> defaultValue(0),
            'created_by' => $this -> integer(),
            'new_tag_id' => $this -> integer()
        ]);
        $this -> addForeignKey('user','news','created_by','user','id','CASCADE');
       // $this -> addForeignKey('tags','news','new_tag_id','tags','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this ->dropTable('news');
        $this->dropForeignKey('created_by','user');
        $this->dropForeignKey('new_tag_id','tags');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211024_133441_news cannot be reverted.\n";

        return false;
    }
    */
}
