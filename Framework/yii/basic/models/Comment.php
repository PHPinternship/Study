<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_comment".
 *
 * @property int $id
 * @property string $content
 * @property string $status
 * @property string|null $create_time
 * @property string $author
 * @property string $email
 * @property string $url
 * @property int $post_id
 *
 * @property Post $post
 */
class Comment extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const STATUS_1 = '1';
    const STATUS_2 = '2';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_time'], 'default', 'value' => null],
            [['id', 'content', 'status', 'author', 'email', 'url', 'post_id'], 'required'],
            [['id', 'post_id'], 'integer'],
            [['content', 'status'], 'string'],
            [['create_time'], 'safe'],
            [['author'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 40],
            [['url'], 'string', 'max' => 200],
            ['status', 'in', 'range' => array_keys(self::optsStatus())],
            [['id'], 'unique'],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::class, 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'author' => 'Author',
            'email' => 'Email',
            'url' => 'Url',
            'post_id' => 'Post ID',
        ];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }


    /**
     * column status ENUM value labels
     * @return string[]
     */
    public static function optsStatus()
    {
        return [
            self::STATUS_1 => '1',
            self::STATUS_2 => '2',
        ];
    }

    /**
     * @return string
     */
    public function displayStatus()
    {
        return self::optsStatus()[$this->status];
    }

    /**
     * @return bool
     */
    public function isStatus1()
    {
        return $this->status === self::STATUS_1;
    }

    public function setStatusTo1()
    {
        $this->status = self::STATUS_1;
    }

    /**
     * @return bool
     */
    public function isStatus2()
    {
        return $this->status === self::STATUS_2;
    }

    public function setStatusTo2()
    {
        $this->status = self::STATUS_2;
    }
}
