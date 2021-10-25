<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string|null $description
 * @property string|null $content
 * @property string|null $created_at
 * @property int $status
 * @property int|null $created_by
 //* @property int|null $new_tag_id
 *
 * @property User $createdBy
 * @property Tags $newTag
 */
class news extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'short_description'], 'required'],
            [['description', 'content'], 'string'],
            [['created_at'], 'date','format' => 'php:Y-m-d'],
            [['created_at'], 'default','value' => date('Y-m-d')],
            [['status', 'created_by', 'new_tag_id'], 'integer'],
            [['title', 'short_description'], 'string', 'max' => 255],
         //   [['new_tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tags::className(), 'targetAttribute' => ['new_tag_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'content' => 'Content',
            'created_at' => 'Created At',
            'status' => 'Status',
            'created_by' => 'Created By',
          //  'new_tag_id' => 'New Tag ID',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[NewTag]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tags::class, ['id' => 'id_tags'])
            ->viaTable('news_tags', ['id_news' => 'id']);
    }
    public function getSelectedTags()
    {
        $selectedIds = $this->getTags()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveTags($tags)
    {
        if (is_array($tags))
        {
            $this->clearCurrentTags();

            foreach($tags as $tag_id)
            {
                $tag = Tags::findOne($tag_id);
                $this->link('tags', $tag);
            }
        }
    }

    public function clearCurrentTags()
    {
        NewsTags::deleteAll(['id_news'=>$this->id]);
    }

}
