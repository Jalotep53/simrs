<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PasienCorona;

/**
 * PasienCoronaSearch represents the model behind the search form of `frontend\models\PasienCorona`.
 */
class PasienCoronaSearch extends PasienCorona
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengenal', 'no_rkm_medis', 'inisial', 'nama_lengkap', 'tgl_masuk', 'kode_jk', 'nama_jk', 'tgl_lahir', 'kode_kewarganegaraan', 'nama_kewarganegaraan', 'kode_penularan', 'sumber_penularan', 'kd_kelurahan', 'nm_kelurahan', 'kd_kecamatan', 'nm_kecamatan', 'kd_kabupaten', 'nm_kabupaten', 'kd_propinsi', 'nm_propinsi', 'tgl_keluar', 'kode_statuskeluar', 'nama_statuskeluar', 'tgl_lapor', 'kode_statusrawat', 'nama_statusrawat', 'kode_statusisolasi', 'nama_statusisolasi', 'email', 'notelp', 'sebab_kematian', 'kode_jenis_pasien', 'nama_jenis_pasien'], 'safe'],
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
        $query = PasienCorona::find();

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
            'tgl_masuk' => $this->tgl_masuk,
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_keluar' => $this->tgl_keluar,
            'tgl_lapor' => $this->tgl_lapor,
        ]);

        $query->andFilterWhere(['like', 'no_pengenal', $this->no_pengenal])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'inisial', $this->inisial])
            ->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'kode_jk', $this->kode_jk])
            ->andFilterWhere(['like', 'nama_jk', $this->nama_jk])
            ->andFilterWhere(['like', 'kode_kewarganegaraan', $this->kode_kewarganegaraan])
            ->andFilterWhere(['like', 'nama_kewarganegaraan', $this->nama_kewarganegaraan])
            ->andFilterWhere(['like', 'kode_penularan', $this->kode_penularan])
            ->andFilterWhere(['like', 'sumber_penularan', $this->sumber_penularan])
            ->andFilterWhere(['like', 'kd_kelurahan', $this->kd_kelurahan])
            ->andFilterWhere(['like', 'nm_kelurahan', $this->nm_kelurahan])
            ->andFilterWhere(['like', 'kd_kecamatan', $this->kd_kecamatan])
            ->andFilterWhere(['like', 'nm_kecamatan', $this->nm_kecamatan])
            ->andFilterWhere(['like', 'kd_kabupaten', $this->kd_kabupaten])
            ->andFilterWhere(['like', 'nm_kabupaten', $this->nm_kabupaten])
            ->andFilterWhere(['like', 'kd_propinsi', $this->kd_propinsi])
            ->andFilterWhere(['like', 'nm_propinsi', $this->nm_propinsi])
            ->andFilterWhere(['like', 'kode_statuskeluar', $this->kode_statuskeluar])
            ->andFilterWhere(['like', 'nama_statuskeluar', $this->nama_statuskeluar])
            ->andFilterWhere(['like', 'kode_statusrawat', $this->kode_statusrawat])
            ->andFilterWhere(['like', 'nama_statusrawat', $this->nama_statusrawat])
            ->andFilterWhere(['like', 'kode_statusisolasi', $this->kode_statusisolasi])
            ->andFilterWhere(['like', 'nama_statusisolasi', $this->nama_statusisolasi])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'notelp', $this->notelp])
            ->andFilterWhere(['like', 'sebab_kematian', $this->sebab_kematian])
            ->andFilterWhere(['like', 'kode_jenis_pasien', $this->kode_jenis_pasien])
            ->andFilterWhere(['like', 'nama_jenis_pasien', $this->nama_jenis_pasien]);

        return $dataProvider;
    }
}
