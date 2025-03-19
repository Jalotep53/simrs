<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PengajuanInventaris;

/**
 * PengajuanInventarisSearch represents the model behind the search form of `frontend\models\PengajuanInventaris`.
 */
class PengajuanInventarisSearch extends PengajuanInventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'nik', 'urgensi', 'latar_belakang', 'nama_barang', 'spesifikasi', 'keterangan', 'nik_pj', 'status'], 'safe'],
            [['jumlah', 'harga', 'total'], 'number'],
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
        $query = PengajuanInventaris::find();

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
            'jumlah' => $this->jumlah,
            'harga' => $this->harga,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_pengajuan', $this->no_pengajuan])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'urgensi', $this->urgensi])
            ->andFilterWhere(['like', 'latar_belakang', $this->latar_belakang])
            ->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'spesifikasi', $this->spesifikasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nik_pj', $this->nik_pj])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
