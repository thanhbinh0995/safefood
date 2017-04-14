<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "news_tag".
 *
 * @property integer $newsTagId
 * @property integer $newsId
 * @property integer $tagId
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property News $news
 * @property Tag $tag
 */
class NewsTag extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    public static function tableName()
    {
        return 'news_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['newsId', 'tagId'], 'required'],
            [['newsId', 'tagId', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['newsId'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['newsId' => 'newsId']],
            [['tagId'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tagId' => 'tagId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsTagId' => 'News Tag ID',
            'newsId' => 'News ID',
            'tagId' => 'Tag ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['newsId' => 'newsId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['tagId' => 'tagId']);
    }
}
