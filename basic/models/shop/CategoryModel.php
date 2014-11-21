<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Category".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Subcategory[] $subcategories
 */
class CategoryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
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
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategories()
    {
        return $this->hasMany(Subcategory::className(), ['id_category' => 'id']);
    }
}
