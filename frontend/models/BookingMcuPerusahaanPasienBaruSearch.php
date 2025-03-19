<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingMcuPerusahaanPasienBaru;

/**
 * BookingMcuPerusahaanPasienBaruSearch represents the model behind the search form of `frontend\models\BookingMcuPerusahaanPasienBaru`.
 */
class BookingMcuPerusahaanPasienBaruSearch extends BookingMcuPerusahaanPasienBaru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'nm_pasien', 'no_ktp', 'jk', 'tmp_lahir', 'tgl_lahir', 'nm_ibu', 'alamat', 'kelurahan', 'kecamatan', 'kabupaten', 'propinsi', 'gol_darah', 'pekerjaan', 'stts_nikah', 'agama', 'tgl_mcu', 'no_tlp', 'umur', 'pnd', 'keluarga', 'namakeluarga', 'pekerjaanpj', 'alamatpj', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj', 'propinsipj', 'perusahaan_pasien', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'email', 'nip', 'status'], 'safe'],
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
        $query = BookingMcuPerusahaanPasienBaru::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_mcu' => $this->tgl_mcu,
        ]);

        $query->andFilterWhere(['like', 'no_pengajuan', $this->no_pengajuan])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'nm_ibu', $this->nm_ibu])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kelurahan', $this->kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'propinsi', $this->propinsi])
            ->andFilterWhere(['like', 'gol_darah', $this->gol_darah])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'stts_nikah', $this->stts_nikah])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp])
            ->andFilterWhere(['like', 'umur', $this->umur])
            ->andFilterWhere(['like', 'pnd', $this->pnd])
            ->andFilterWhere(['like', 'keluarga', $this->keluarga])
            ->andFilterWhere(['like', 'namakeluarga', $this->namakeluarga])
            ->andFilterWhere(['like', 'pekerjaanpj', $this->pekerjaanpj])
            ->andFilterWhere(['like', 'alamatpj', $this->alamatpj])
            ->andFilterWhere(['like', 'kelurahanpj', $this->kelurahanpj])
            ->andFilterWhere(['like', 'kecamatanpj', $this->kecamatanpj])
            ->andFilterWhere(['like', 'kabupatenpj', $this->kabupatenpj])
            ->andFilterWhere(['like', 'propinsipj', $this->propinsipj])
            ->andFilterWhere(['like', 'perusahaan_pasien', $this->perusahaan_pasien])
            ->andFilterWhere(['like', 'suku_bangsa', $this->suku_bangsa])
            ->andFilterWhere(['like', 'bahasa_pasien', $this->bahasa_pasien])
            ->andFilterWhere(['like', 'cacat_fisik', $this->cacat_fisik])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
