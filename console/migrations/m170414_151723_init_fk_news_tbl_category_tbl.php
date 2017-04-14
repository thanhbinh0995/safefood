<?php

use yii\db\Migration;

class m170414_151723_init_fk_news_tbl_category_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_news_tbl_category_tbl", 'news', 'categoryId', 'category', 'categoryId', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_news_tbl_category_tbl", "news");
    }
}
