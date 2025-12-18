<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_post".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property string $status
 * @property string|null $tags
 * @property string|null $create_time
 * @property string|null $update_time
 * @property int $author_id
 *
 * @property User $author
 * @property Comment[] $tblComments
 */
class Post extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const STATUS_1 = '1';
    const STATUS_2 = '2';
    const STATUS_3 = '3';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'tags', 'create_time', 'update_time'], 'default', 'value' => null],
            [['id', 'title', 'status', 'author_id'], 'required'],
            [['id', 'author_id'], 'integer'],
            [['content', 'status'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'tags'], 'string', 'max' => 45],
            ['status', 'in', 'range' => array_keys(self::optsStatus())],
            [['id'], 'unique'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['author_id' => 'id']],
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
            'content' => 'Content',
            'status' => 'Status',
            'tags' => 'Tags',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }

    /**
     * Gets query for [[TblComments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
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
            self::STATUS_3 => '3',
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

    /**
     * @return bool
     */
    public function isStatus3()
    {
        return $this->status === self::STATUS_3;
    }

    public function setStatusTo3()
    {
        $this->status = self::STATUS_3;
    }
}
