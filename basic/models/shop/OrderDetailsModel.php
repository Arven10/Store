<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "OrderDetails".
 *
 * @property integer $id
 * @property integer $id_order
 * @property integer $id_product
 * @property double $price
 * @property integer $quantity
 *
 * @property Product $idProduct
 * @property Order $idOrder
 */
class OrderDetailsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'OrderDetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order', 'id_product', 'price', 'quantity'], 'required'],
            [['id_order', 'id_product', 'quantity'], 'integer'],
            [['price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_order' => 'Id Order',
            'id_product' => 'Id Product',
            'price' => 'Price',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'id_order']);
    }
}
