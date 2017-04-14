<?php

use yii\db\Migration;

class m170414_151600_init_fk_news_tag_tbl_news_tbl extends Migration
{
    public function up()
    {   
        $this->addForeignKey("fk_news_tag_tbl_news_tbl", 'news_tag', 'newsId', 'news', 'newsId', "CASCADE", "RESTRICT");
    }   

    public function down()
    {
        $this->dropForeignKey("fk_news_tag_tbl_news_tbl", "news_tag");
    }
}
