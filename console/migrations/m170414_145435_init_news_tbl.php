<?php

use yii\db\Migration;

class m170414_145435_init_news_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%news}}', [
            'newsId' => $this->primaryKey(),
            'categoryId' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'mainHeader' => $this->string(), 
            'content' => $this->text(),
            'image' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'deleted_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);  
    }

    public function down()
    {
        $this->dropTable('{{%news}}');
    }
}
