<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $tags
 * @property string $status
 * @property int $create_time
 * @property int $update_time
 * @property int $author_id
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['create_time', 'update_time', 'author_id'], 'integer'],
            [['title', 'tags', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'tags' => '标签',
            'status' => '状态',
            'create_time' => '创建时间',
            'update_time' => '修改时间',
            'author_id' => '作者',
        ];
    }

    public function getStatus0(){
    	return $this->hasOne (Poststatus::className (),['id'=>'status']);
	}

	public function getAuthor(){
    	return $this->hasOne (User::className (),['id'=>'author_id']);
	}
}
