<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PermintaanLab;

/**
 * PermintaanLabSearch represents the model behind the search form of `frontend\models\PermintaanLab`.
 */
class PermintaanLabSearch extends PermintaanLab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'no_rawat', 'tgl_permintaan', 'jam_permintaan', 'tgl_sampel', 'jam_sampel', 'tgl_hasil', 'jam_hasil', 'dokter_perujuk', 'status', 'informasi_tambahan', 'diagnosa_klinis'], 'safe'],
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
        $query = PermintaanLab::find();

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
            'tgl_permintaan' => $this->tgl_permintaan,
            'jam_permintaan' => $this->jam_permintaan,
            'tgl_sampel' => $this->tgl_sampel,
            'jam_sampel' => $this->jam_sampel,
            'tgl_hasil' => $this->tgl_hasil,
            'jam_hasil' => $this->jam_hasil,
        ]);

        $query->andFilterWhere(['like', 'noorder', $this->noorder])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'dokter_perujuk', $this->dokter_perujuk])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'informasi_tambahan', $this->informasi_tambahan])
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis]);

        return $dataProvider;
    }
}
