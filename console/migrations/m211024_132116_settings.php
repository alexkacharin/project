<?php

use yii\db\Migration;

/**
 * Class m211024_132116_settings
 */
class m211024_132116_settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('settings',[
            'id' => $this -> primaryKey(),
            'key' => $this ->string(255) -> notNull() -> unique(),
            'value' => $this -> string(255) -> notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this ->dropTable('settings');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211024_132116_settings cannot be reverted.\n";

        return false;
    }
    */
}
