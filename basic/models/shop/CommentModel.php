<?php

namespace app\models\shop;

use Yii;

/**
 * This is the model class for table "Comment".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_product
 * @property string $content
 *
 * @property Product $idProduct
 * @property User $idUser
 */
class CommentModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_product', 'content'], 'required'],
            [['id_user', 'id_product'], 'integer'],
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
            'id_user' => 'Id User',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
