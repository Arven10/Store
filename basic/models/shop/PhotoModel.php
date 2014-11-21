<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Photo".
 *
 * @property integer $id
 * @property integer $id_product
 * @property string $content
 *
 * @property Product $idProduct
 */
class PhotoModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_product', 'content'], 'required'],
            [['id_product'], 'integer'],
            [['content'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_product' => 'Id Product',
            'content' => 'Content',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'id_product']);
    }
}
