<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `frontend\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'no_order', 'kode_suplier', 'nip', 'tgl_pesan', 'tgl_faktur', 'tgl_tempo', 'kd_bangsal', 'status'], 'safe'],
            [['total1', 'potongan', 'total2', 'ppn', 'meterai', 'tagihan'], 'number'],
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
        $query = Pemesanan::find();

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
            'tgl_pesan' => $this->tgl_pesan,
            'tgl_faktur' => $this->tgl_faktur,
            'tgl_tempo' => $this->tgl_tempo,
            'total1' => $this->total1,
            'potongan' => $this->potongan,
            'total2' => $this->total2,
            'ppn' => $this->ppn,
            'meterai' => $this->meterai,
            'tagihan' => $this->tagihan,
        ]);

        $query->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'no_order', $this->no_order])
            ->andFilterWhere(['like', 'kode_suplier', $this->kode_suplier])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
