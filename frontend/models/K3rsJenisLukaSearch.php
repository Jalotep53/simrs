<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsJenisLuka;

/**
 * K3rsJenisLukaSearch represents the model behind the search form of `frontend\models\K3rsJenisLuka`.
 */
class K3rsJenisLukaSearch extends K3rsJenisLuka
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_luka', 'jenis_luka'], 'safe'],
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
        $query = K3rsJenisLuka::find();

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
        $query->andFilterWhere(['like', 'kode_luka', $this->kode_luka])
            ->andFilterWhere(['like', 'jenis_luka', $this->jenis_luka]);

        return $dataProvider;
    }
}
