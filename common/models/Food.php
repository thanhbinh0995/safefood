<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "food".
 *
 * @property integer $foodId
 * @property integer $categoryId
 * @property string $name
 * @property string $note
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Category $category
 * @property Quality[] $qualities
 */
class Food extends \yii\db\ActiveRecord
{
    public $qualityId;
    public $address;
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId', 'name','restaurantCode'], 'required'],
            [['categoryId','qualityId', 'created_at', 'updated_at', 'deleted_at','restaurantCode'], 'integer'],
            [['name', 'note','address'], 'string', 'max' => 255],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryId' => 'categoryId']],
            [['restaurantCode'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['restaurantCode' => 'restaurantCode']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'foodId' => 'Food ID',
            'categoryId' => 'Category ID',
            'name' => 'Name',
            'note' => 'Note',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'qualityId' => 'Quality',
            'restaurantCode'=> 'Address'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['categoryId' => 'categoryId']);
    }
    public function getRestaurant()
    {
        return $this->hasOne(Restaurant::className(), ['restaurantCode' => 'restaurantCode']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQualities()
    {
        return $this->hasMany(Quality::className(), ['foodId' => 'foodId']);
    }

    public function listFood(){
        return ArrayHelper::map(self::find()->all(), 'foodId', 'name');
    }
}
