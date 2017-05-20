<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Food;

/**
 * FoodSearch represents the model behind the search form about `common\models\Food`.
 */
class FoodSearch extends Food
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['foodId', 'categoryId','restaurantCode', 'created_at', 'updated_at', 'deleted_at','qualityId'], 'integer'],
            [['name', 'note'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Food::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
         $dataProvider->sort->attributes['qualityId'] = [

    'asc' => ['quality.star' => SORT_ASC],
    'desc' => ['quality.star' => SORT_DESC],
];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('qualities');
        // grid filtering conditions
        $query->andFilterWhere([
            'foodId' => $this->foodId,
            'categoryId' => $this->categoryId,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'quality.foodId'  => $this->qualityId,
            'restaurantCode' => $this->restaurantCode
        ]);
        
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
