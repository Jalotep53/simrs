<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataKlasifikasiPasienRanap;

/**
 * DataKlasifikasiPasienRanapSearch represents the model behind the search form of `frontend\models\DataKlasifikasiPasienRanap`.
 */
class DataKlasifikasiPasienRanapSearch extends DataKlasifikasiPasienRanap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'no_rawat', 'Minimal', 'Partial', 'Total', 'kd_kamar'], 'safe'],
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
        $query = DataKlasifikasiPasienRanap::find();

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
        $query->andFilterWhere([
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'Minimal', $this->Minimal])
            ->andFilterWhere(['like', 'Partial', $this->Partial])
            ->andFilterWhere(['like', 'Total', $this->Total])
            ->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar]);

        return $dataProvider;
    }
}
