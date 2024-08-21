<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPemberianObat;

/**
 * DetailPemberianObatSearch represents the model behind the search form of `frontend\models\DetailPemberianObat`.
 */
class DetailPemberianObatSearch extends DetailPemberianObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_perawatan', 'jam', 'no_rawat', 'kode_brng', 'status', 'kd_bangsal', 'no_batch', 'no_faktur'], 'safe'],
            [['h_beli', 'biaya_obat', 'jml', 'embalase', 'tuslah', 'total'], 'number'],
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
        $query = DetailPemberianObat::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam' => $this->jam,
            'h_beli' => $this->h_beli,
            'biaya_obat' => $this->biaya_obat,
            'jml' => $this->jml,
            'embalase' => $this->embalase,
            'tuslah' => $this->tuslah,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
