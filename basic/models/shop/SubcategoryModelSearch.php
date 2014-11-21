<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\SubcategoryModel;

/**
 * SubcategoryModelSearch represents the model behind the search form about `app\models\shop\SubcategoryModel`.
 */
class SubcategoryModelSearch extends SubcategoryModel
{
    public function rules()
    {
        return [
            [['id', 'id_category'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = SubcategoryModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_category' => $this->id_category,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
