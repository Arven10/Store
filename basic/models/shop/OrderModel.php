<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Order".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $amount
 * @property string $date
 * @property string $status
 *
 * @property User $idUser
 * @property OrderDetails[] $orderDetails
 */
class OrderModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'amount', 'date', 'status'], 'required'],
            [['id_user', 'amount'], 'integer'],
            [['date'], 'safe'],
            [['status'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'amount' => 'Amount',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::className(), ['id_order' => 'id']);
    }
}
