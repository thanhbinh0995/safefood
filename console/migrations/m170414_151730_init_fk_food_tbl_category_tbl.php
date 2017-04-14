<?php

use yii\db\Migration;

class m170414_151730_init_fk_food_tbl_category_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_food_tbl_category_tbl", 'food', 'categoryId', 'category', 'categoryId', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_food_tbl_category_tbl", "food");
    }
}
