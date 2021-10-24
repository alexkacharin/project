<?php

use yii\db\Migration;

/**
 * Class m211024_132050_news_tags
 */
class m211024_132050_news_tags extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function safeUp()
    {
        $this -> createTable('tags',[
            'id' => $this -> primaryKey(),
            'title' => $this ->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this ->dropTable('tags');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211024_132050_news_tags cannot be reverted.\n";

        return false;
    }
    */
}
