<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsPeristiwa;

/**
 * K3rsPeristiwaSearch represents the model behind the search form of `frontend\models\K3rsPeristiwa`.
 */
class K3rsPeristiwaSearch extends K3rsPeristiwa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_k3rs', 'tgl_insiden', 'waktu_insiden', 'kode_pekerjaan', 'tgl_pelaporan', 'waktu_pelaporan', 'kode_lokasi', 'kronologi_kejadian', 'kode_penyebab', 'nik', 'kategori_cidera', 'kode_cidera', 'kode_luka', 'kode_bagian', 'penyebab_langsung_kondisi', 'penyebab_langsung_tindakan', 'penyebab_tidak_langsung_pribadi', 'penyebab_tidak_langsung_pekerjaan', 'barang_bukti', 'kode_dampak', 'nik_pelapor', 'perbaikan_jenis_tindakan', 'perbaikan_rencana_tindakan', 'perbaikan_target', 'perbaikan_wewenang', 'nik_timk3', 'catatan'], 'safe'],
            [['lt'], 'integer'],
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
        $query = K3rsPeristiwa::find();

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
            'tgl_insiden' => $this->tgl_insiden,
            'waktu_insiden' => $this->waktu_insiden,
            'tgl_pelaporan' => $this->tgl_pelaporan,
            'waktu_pelaporan' => $this->waktu_pelaporan,
            'lt' => $this->lt,
            'perbaikan_target' => $this->perbaikan_target,
        ]);

        $query->andFilterWhere(['like', 'no_k3rs', $this->no_k3rs])
            ->andFilterWhere(['like', 'kode_pekerjaan', $this->kode_pekerjaan])
            ->andFilterWhere(['like', 'kode_lokasi', $this->kode_lokasi])
            ->andFilterWhere(['like', 'kronologi_kejadian', $this->kronologi_kejadian])
            ->andFilterWhere(['like', 'kode_penyebab', $this->kode_penyebab])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'kategori_cidera', $this->kategori_cidera])
            ->andFilterWhere(['like', 'kode_cidera', $this->kode_cidera])
            ->andFilterWhere(['like', 'kode_luka', $this->kode_luka])
            ->andFilterWhere(['like', 'kode_bagian', $this->kode_bagian])
            ->andFilterWhere(['like', 'penyebab_langsung_kondisi', $this->penyebab_langsung_kondisi])
            ->andFilterWhere(['like', 'penyebab_langsung_tindakan', $this->penyebab_langsung_tindakan])
            ->andFilterWhere(['like', 'penyebab_tidak_langsung_pribadi', $this->penyebab_tidak_langsung_pribadi])
            ->andFilterWhere(['like', 'penyebab_tidak_langsung_pekerjaan', $this->penyebab_tidak_langsung_pekerjaan])
            ->andFilterWhere(['like', 'barang_bukti', $this->barang_bukti])
            ->andFilterWhere(['like', 'kode_dampak', $this->kode_dampak])
            ->andFilterWhere(['like', 'nik_pelapor', $this->nik_pelapor])
            ->andFilterWhere(['like', 'perbaikan_jenis_tindakan', $this->perbaikan_jenis_tindakan])
            ->andFilterWhere(['like', 'perbaikan_rencana_tindakan', $this->perbaikan_rencana_tindakan])
            ->andFilterWhere(['like', 'perbaikan_wewenang', $this->perbaikan_wewenang])
            ->andFilterWhere(['like', 'nik_timk3', $this->nik_timk3])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
