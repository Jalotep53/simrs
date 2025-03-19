<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SetUrutNoRkmMedis;

/**
 * SetUrutNoRkmMedisSearch represents the model behind the search form of `frontend\models\SetUrutNoRkmMedis`.
 */
class SetUrutNoRkmMedisSearch extends SetUrutNoRkmMedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan', 'tahun', 'bulan', 'posisi_tahun_bulan'], 'safe'],
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
        $query = SetUrutNoRkmMedis::find();

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
        $query->andFilterWhere(['like', 'urutan', $this->urutan])
            ->andFilterWhere(['like', 'tahun', $this->tahun])
            ->andFilterWhere(['like', 'bulan', $this->bulan])
            ->andFilterWhere(['like', 'posisi_tahun_bulan', $this->posisi_tahun_bulan]);

        return $dataProvider;
    }
}
