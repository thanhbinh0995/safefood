<?php

use yii\db\Migration;

class m170414_151544_init_fk_news_tag_tbl_tag_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_news_tag_tbl_tag_tbl", 'news_tag', 'tagId', 'tag', 'tagId', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_news_tag_tbl_tag_tbl", "news_tag");
    }
}
