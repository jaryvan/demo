<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $status
 * @property string $user_create_at
 * @property string $user_update_at
 * @property string $realname
 * @property string $email
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string'],
            [['user_create_at'], 'required'],
            [['user_create_at', 'user_update_at'], 'safe'],
            [['username', 'password', 'realname'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'status' => 'Status',
            'user_create_at' => 'User Create At',
            'user_update_at' => 'User Update At',
            'realname' => 'Realname',
            'email' => 'Email',
        ];
    }
}
