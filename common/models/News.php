<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "news".
 *
 * @property integer $newsId
 * @property integer $categoryId
 * @property string $title
 * @property string $mainHeader
 * @property string $content
 * @property string $image
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Category $category
 * @property NewsTag[] $newsTags
 */
class News extends \yii\db\ActiveRecord
{
    public $fileImage;
    public $tags = array();
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),

        ];
    }

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId', 'title', 'tags'], 'required'],
            [['categoryId', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['content'], 'string'],
            [['title', 'mainHeader', 'image'], 'string', 'max' => 255],
            [['fileImage'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categoryId' => 'categoryId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'newsId' => 'News ID',
            'categoryId' => 'Category ID',
            'title' => 'Title',
            'mainHeader' => 'Main Header',
            'content' => 'Content',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['categoryId' => 'categoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsTags()
    {
        return $this->hasMany(NewsTag::className(), ['newsId' => 'newsId']);
    }

    public static function listNews()
    {
        return ArrayHelper::map(self::find()->all(), 'newsId', 'title');
    }

    public function getTags()
    {
        $tags = NewsTag::findAll([
            'newsId' => $this->newsId,
        ]);
        return $tags;
    }

    public function setTags()
    {
        $values = $this->tags;
        foreach ($values as $value) {
            $newsTag = new NewsTag();
            $newsTag->newsId = $this->newsId;
            $newsTag->tagId = $value;
            $newsTag->save();
        }
    }

    public function deleteTags()
    {
        $values = NewsTag::findAll([
            'newsId' => $this->newsId,
        ]);
        foreach ($values as $value) {
            $value->delete();
        }
    }

    public static function getTagsName($model)
    {
        $tags = array();
        foreach ($model->newsTags as $newsTag) {
            array_push($tags, $newsTag->tag->name);
        }
        return implode(", ", $tags);
    }
}
