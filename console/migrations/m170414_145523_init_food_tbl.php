<?php

use yii\db\Migration;

class m170414_145523_init_food_tbl extends Migration
{
    public function up()
    {   
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%food}}', [
            'foodId' => $this->primaryKey(),
            'categoryId' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'note' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'deleted_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);  
    }

    public function down()
    {
        $this->dropTable('{{%food}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
