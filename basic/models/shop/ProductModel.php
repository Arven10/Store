<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property integer $id
 * @property integer $id_subcategory
 * @property string $name
 * @property string $description
 * @property double $cost
 *
 * @property Cart[] $carts
 * @property Comment[] $comments
 * @property OrderDetails[] $orderDetails
 * @property Photo[] $photos
 * @property Subcategory $idSubcategory
 */
class ProductModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_subcategory', 'name', 'description', 'cost'], 'required'],
            [['id_subcategory'], 'integer'],
            [['cost'], 'number'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_subcategory' => 'Id Subcategory',
            'name' => 'Name',
            'description' => 'Description',
            'cost' => 'Cost',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetails::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['id_product' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSubcategory()
    {
        return $this->hasOne(Subcategory::className(), ['id' => 'id_subcategory']);
    }
}
