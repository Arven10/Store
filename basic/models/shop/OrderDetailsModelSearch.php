<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\OrderDetailsModel;

/**
 * OrderDetailsModelSearch represents the model behind the search form about `app\models\shop\OrderDetailsModel`.
 */
class OrderDetailsModelSearch extends OrderDetailsModel
{
    public function rules()
    {
        return [
            [['id', 'id_order', 'id_product', 'quantity'], 'integer'],
            [['price'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OrderDetailsModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_order' => $this->id_order,
            'id_product' => $this->id_product,
            'price' => $this->price,
            'quantity' => $this->quantity,
        ]);

        return $dataProvider;
    }
}
