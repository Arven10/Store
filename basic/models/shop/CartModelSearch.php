<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\CartModel;

/**
 * CartModelSearch represents the model behind the search form about `app\models\shop\CartModel`.
 */
class CartModelSearch extends CartModel
{
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_product'], 'integer'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = CartModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'id_product' => $this->id_product,
        ]);

        return $dataProvider;
    }
}
