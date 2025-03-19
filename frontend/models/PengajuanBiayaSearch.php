<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PengajuanBiaya;

/**
 * PengajuanBiayaSearch represents the model behind the search form of `frontend\models\PengajuanBiaya`.
 */
class PengajuanBiayaSearch extends PengajuanBiaya
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'tanggal', 'nik', 'urgensi', 'uraian_latar_belakang', 'tujuan_pengajuan', 'target_sasaran', 'lokasi_kegiatan', 'keterangan', 'nik_pj', 'status'], 'safe'],
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
        $query = PengajuanBiaya::find();

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
            ->andFilterWhere(['like', 'uraian_latar_belakang', $this->uraian_latar_belakang])
            ->andFilterWhere(['like', 'tujuan_pengajuan', $this->tujuan_pengajuan])
            ->andFilterWhere(['like', 'target_sasaran', $this->target_sasaran])
            ->andFilterWhere(['like', 'lokasi_kegiatan', $this->lokasi_kegiatan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nik_pj', $this->nik_pj])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
