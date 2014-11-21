<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\UserModel;

/**
 * UserModelSearch represents the model behind the search form about `app\models\shop\UserModel`.
 */
class UserModelSearch extends UserModel
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['email', 'phone_number', 'full_name', 'address', 'password'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UserModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
