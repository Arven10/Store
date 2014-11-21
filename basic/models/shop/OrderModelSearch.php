<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\OrderModel;

/**
 * OrderModelSearch represents the model behind the search form about `app\models\shop\OrderModel`.
 */
class OrderModelSearch extends OrderModel
{
    public function rules()
    {
        return [
            [['id', 'id_user', 'amount'], 'integer'],
            [['date', 'status'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OrderModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'amount' => $this->amount,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
