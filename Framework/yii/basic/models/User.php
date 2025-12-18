<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $salt
 * @property string $email
 * @property string|null $profile
 *
 * @property Post[] $tblPosts
 */
class User extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['salt', 'profile'], 'default', 'value' => null],
            [['id', 'username', 'password', 'email'], 'required'],
            [['id'], 'integer'],
            [['username', 'salt'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 40],
            [['profile'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'salt' => 'Salt',
            'email' => 'Email',
            'profile' => 'Profile',
        ];
    }

    /**
     * Gets query for [[TblPosts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPosts()
    {
        return $this->hasMany(Post::class, ['author_id' => 'id']);
    }

}
