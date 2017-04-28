<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tag".
 *
 * @property integer $tagId
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property NewsTag[] $newsTags
 */
class Tag extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tagId' => 'Tag ID',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTags()
    {
        return $this->hasMany(NewsTag::className(), ['tagId' => 'tagId']);
    }
    public function getNews()
    {
        // return $this->hasMany(Tour::className(), ['id' => 'tourId'])->viaTable('{{%tour_type}}', ['typeId' => 'id']);
        return $this->hasMany(Tag::className(), ['tagId' => 'newsId'])->via('newsTags');
    }
    public static function listTag(){
        return ArrayHelper::map(self::find()->all(), 'tagId', 'name');
    }
    public static function getNewsName($model)
    {
        $news = array();
        $tags = Tag::find()->one();
        foreach($model->newsTags as $newsTag){
            array_push($news, $newsTag->news);
        }
        return $news;
    }
}
