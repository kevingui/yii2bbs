<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adminuser".
 *
 * @property int $id ID
 * @property string $username 用户名
 * @property string $realname 姓名
 * @property string $email 电子邮箱
 * @property int $status 状态
 * @property string $profile
 * @property string $password_hash 密码
 * @property string $auth_key 授权key
 * @property string $password_reset_token 密码重置token
 * @property string $access_token 访问token
 * @property int $expire_at 过期时间
 * @property int $logged_at 登入时间
 * @property int $created_at 创建时间
 * @property int $updated_at 最后修改时间
 */
class Adminuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adminuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'email', 'password_hash', 'auth_key'], 'required'],
            [['id', 'status', 'expire_at', 'logged_at', 'created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 32],
            [['realname', 'email', 'profile', 'password_hash', 'auth_key', 'password_reset_token', 'access_token'], 'string', 'max' => 255],
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
            'realname' => 'Realname',
            'email' => 'Email',
            'status' => 'Status',
            'profile' => 'Profile',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'access_token' => 'Access Token',
            'expire_at' => 'Expire At',
            'logged_at' => 'Logged At',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
