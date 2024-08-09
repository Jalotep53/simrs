<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `frontend\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'nm_pasien', 'no_ktp', 'jk', 'tmp_lahir', 'tgl_lahir', 'nm_ibu', 'alamat', 'gol_darah', 'pekerjaan', 'stts_nikah', 'agama', 'tgl_daftar', 'no_tlp', 'umur', 'pnd', 'keluarga', 'namakeluarga', 'kd_pj', 'no_peserta', 'pekerjaanpj', 'alamatpj', 'kelurahanpj', 'kecamatanpj', 'kabupatenpj', 'perusahaan_pasien', 'email', 'nip', 'propinsipj'], 'safe'],
            [['kd_kel', 'kd_kec', 'kd_kab', 'suku_bangsa', 'bahasa_pasien', 'cacat_fisik', 'kd_prop'], 'integer'],
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
        $query = Pasien::find();

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
            'tgl_daftar' => $this->tgl_daftar,
            'kd_kel' => $this->kd_kel,
            'kd_kec' => $this->kd_kec,
            'kd_kab' => $this->kd_kab,
            'suku_bangsa' => $this->suku_bangsa,
            'bahasa_pasien' => $this->bahasa_pasien,
            'cacat_fisik' => $this->cacat_fisik,
            'kd_prop' => $this->kd_prop,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'nm_ibu', $this->nm_ibu])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'gol_darah', $this->gol_darah])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'stts_nikah', $this->stts_nikah])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'no_tlp', $this->no_tlp])
            ->andFilterWhere(['like', 'umur', $this->umur])
            ->andFilterWhere(['like', 'pnd', $this->pnd])
            ->andFilterWhere(['like', 'keluarga', $this->keluarga])
            ->andFilterWhere(['like', 'namakeluarga', $this->namakeluarga])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'no_peserta', $this->no_peserta])
            ->andFilterWhere(['like', 'pekerjaanpj', $this->pekerjaanpj])
            ->andFilterWhere(['like', 'alamatpj', $this->alamatpj])
            ->andFilterWhere(['like', 'kelurahanpj', $this->kelurahanpj])
            ->andFilterWhere(['like', 'kecamatanpj', $this->kecamatanpj])
            ->andFilterWhere(['like', 'kabupatenpj', $this->kabupatenpj])
            ->andFilterWhere(['like', 'perusahaan_pasien', $this->perusahaan_pasien])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'propinsipj', $this->propinsipj]);

        return $dataProvider;
    }
}
