<?php

use yii\db\Migration;

class m170414_151818_init_fk_food_tbl_restaurant_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_food_tbl_restaurant_tbl", 'food', 'restaurantCode', 'restaurant', 'restaurantCode', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_food_tbl_restaurant_tbl", "food");
    }

}
