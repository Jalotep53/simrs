<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MasterTriaseMacamKasus;

/**
 * MasterTriaseMacamKasusSearch represents the model behind the search form of `frontend\models\MasterTriaseMacamKasus`.
 */
class MasterTriaseMacamKasusSearch extends MasterTriaseMacamKasus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kasus', 'macam_kasus'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = MasterTriaseMacamKasus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'kode_kasus', $this->kode_kasus])
            ->andFilterWhere(['like', 'macam_kasus', $this->macam_kasus]);

        return $dataProvider;
    }
}
