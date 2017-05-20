<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "restaurant".
 *
 * @property integer $restaurantCode
 * @property string $name
 * @property string $address
 * @property string $registrationDate
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Quality[] $qualities
 */
class Restaurant extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),

        ];
    }

    public static function tableName()
    {
        return 'restaurant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address'], 'required'],
            [['registrationDate'], 'safe'],
            [['created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'restaurantCode' => 'Restaurant Code',
            'name' => 'Name',
            'address' => 'Address',
            'registrationDate' => 'Registration Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Food::className(), ['restaurantCode' => 'restaurantCode']);
    }

    public function listRestaurant()
    {
        return ArrayHelper::map(self::find()->all(), 'restaurantCode', 'name');
    }
}
