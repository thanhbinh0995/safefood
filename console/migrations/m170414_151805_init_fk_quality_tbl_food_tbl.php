<?php

use yii\db\Migration;

class m170414_151805_init_fk_quality_tbl_food_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_quality_tbl_food_tbl", 'quality', 'foodId', 'food', 'foodId', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_quality_tbl_food_tbl", "quality");
    }
}
