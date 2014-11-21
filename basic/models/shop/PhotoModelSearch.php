<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\PhotoModel;

/**
 * PhotoModelSearch represents the model behind the search form about `app\models\shop\PhotoModel`.
 */
class PhotoModelSearch extends PhotoModel
{
    public function rules()
    {
        return [
            [['id', 'id_product'], 'integer'],
            [['content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PhotoModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_product' => $this->id_product,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
