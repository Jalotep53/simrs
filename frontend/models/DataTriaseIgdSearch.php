<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataTriaseIgd;

/**
 * DataTriaseIgdSearch represents the model behind the search form of `frontend\models\DataTriaseIgd`.
 */
class DataTriaseIgdSearch extends DataTriaseIgd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_kunjungan', 'cara_masuk', 'alat_transportasi', 'alasan_kedatangan', 'keterangan_kedatangan', 'kode_kasus', 'tekanan_darah', 'nadi', 'pernapasan', 'suhu', 'saturasi_o2', 'nyeri'], 'safe'],
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
        $query = DataTriaseIgd::find();

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
            'tgl_kunjungan' => $this->tgl_kunjungan,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'cara_masuk', $this->cara_masuk])
            ->andFilterWhere(['like', 'alat_transportasi', $this->alat_transportasi])
            ->andFilterWhere(['like', 'alasan_kedatangan', $this->alasan_kedatangan])
            ->andFilterWhere(['like', 'keterangan_kedatangan', $this->keterangan_kedatangan])
            ->andFilterWhere(['like', 'kode_kasus', $this->kode_kasus])
            ->andFilterWhere(['like', 'tekanan_darah', $this->tekanan_darah])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'pernapasan', $this->pernapasan])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'saturasi_o2', $this->saturasi_o2])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri]);

        return $dataProvider;
    }
}
