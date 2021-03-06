<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $id
 * @property string $email
 * @property string $phone_number
 * @property string $full_name
 * @property string $address
 * @property string $password
 *
 * @property Cart[] $carts
 * @property Comment[] $comments
 * @property Order[] $orders
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'phone_number', 'full_name', 'address', 'password'], 'required'],
            [['email', 'phone_number', 'full_name'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 1000],
			[['password'], 'string', 'max' => 10, 'min' => 6],
			[['email'], 'match', 'pattern'=>'/[A-Z]{1}/', 'message' => 'Password must contain at least 1 capital letter.'],
			[['email'], 'match', 'pattern'=>'/\d+/', 'message' => 'Password must contain at least 1 number.'],
			[['email'], 'unique'],
			[['full_name'], 'unique'],
			['email', 'email']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'full_name' => 'Full Name',
            'address' => 'Address',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_user' => 'id']);
    }
}
