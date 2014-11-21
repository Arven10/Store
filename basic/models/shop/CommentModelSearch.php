<?php

namespace app\models\shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\shop\CommentModel;

/**
 * CommentModelSearch represents the model behind the search form about `app\models\shop\CommentModel`.
 */
class CommentModelSearch extends CommentModel
{
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_product'], 'integer'],
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
        $query = CommentModel::find();

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

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
