<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Subcategory".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 *
 * @property Product[] $products
 * @property Category $idCategory
 */
class SubcategoryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Subcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'name'], 'required'],
            [['id_category'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id_subcategory' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'id_category']);
    }
}
