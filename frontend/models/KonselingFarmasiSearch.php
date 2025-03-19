<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KonselingFarmasi;

/**
 * KonselingFarmasiSearch represents the model behind the search form of `frontend\models\KonselingFarmasi`.
 */
class KonselingFarmasiSearch extends KonselingFarmasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa', 'obat_pemakaian', 'riwayat_alergi', 'keluhan', 'pernah_datang', 'tindak_lanjut', 'nip'], 'safe'],
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
        $query = KonselingFarmasi::find();

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
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'obat_pemakaian', $this->obat_pemakaian])
            ->andFilterWhere(['like', 'riwayat_alergi', $this->riwayat_alergi])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'pernah_datang', $this->pernah_datang])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
