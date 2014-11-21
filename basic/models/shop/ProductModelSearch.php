<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\ProductModel;

/**
 * ProductModelSearch represents the model behind the search form about `app\models\shop\ProductModel`.
 */
class ProductModelSearch extends ProductModel
{
    public function rules()
    {
        return [
            [['id', 'id_subcategory'], 'integer'],
            [['name', 'description'], 'safe'],
            [['cost'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ProductModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_subcategory' => $this->id_subcategory,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
