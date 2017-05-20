<?php

namespace common\models;
use yii\helpers\ArrayHelper;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "quality".
 *
 * @property integer $qualityId
 * @property integer $foodId
 * @property integer $restaurantCode
 * @property integer $star
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Food $food
 * @property Restaurant $restaurantCode0
 */
class Quality extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    public static function tableName()
    {
        return 'quality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foodId',  'star'], 'required'],
            [['foodId',  'star', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['foodId'], 'exist', 'skipOnError' => true, 'targetClass' => Food::className(), 'targetAttribute' => ['foodId' => 'foodId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qualityId' => 'Quality ID',
            'foodId' => 'Food ID',
            'star' => 'Star',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFood()
    {
        return $this->hasOne(Food::className(), ['foodId' => 'foodId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    public function listQuality(){
        return ArrayHelper::map(self::find()->all(), 'foodId', 'star');
    }
}
