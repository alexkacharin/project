<?php

use yii\db\Migration;

/**
 * Class m211025_094114_tags_for_news
 */
class m211025_094114_tags_for_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('news_tags',[
            'id' => $this -> primaryKey(),
            'id_news' => $this ->integer(),
            'id_tags' => $this ->integer(),
        ]);
        $this -> addForeignKey('news', 'news_tags', 'id_news', 'news', 'id','CASCADE');
        $this -> addForeignKey('tags', 'news_tags', 'id_tags', 'tags', 'id','CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this ->dropTable('news_tags');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211025_094114_tags_for_news cannot be reverted.\n";

        return false;
    }
    */
}
