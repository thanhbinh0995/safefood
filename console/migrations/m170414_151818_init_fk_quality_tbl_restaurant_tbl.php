<?php

use yii\db\Migration;

class m170414_151818_init_fk_quality_tbl_restaurant_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_quality_tbl_restaurant_tbl", 'quality', 'restaurantCode', 'restaurant', 'restaurantCode', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_quality_tbl_restaurant_tbl", "quality");
    }

}
