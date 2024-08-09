<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `frontend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'wajibmasuk', 'indek', 'cuti_diambil'], 'integer'],
            [['nik', 'nama', 'jk', 'jbtn', 'jnj_jabatan', 'kode_kelompok', 'kode_resiko', 'kode_emergency', 'departemen', 'bidang', 'stts_wp', 'stts_kerja', 'npwp', 'pendidikan', 'tmp_lahir', 'tgl_lahir', 'alamat', 'kota', 'mulai_kerja', 'ms_kerja', 'indexins', 'bpd', 'rekening', 'stts_aktif', 'mulai_kontrak', 'photo', 'no_ktp'], 'safe'],
            [['gapok', 'pengurang', 'dankes'], 'number'],
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
        $query = Pegawai::find();

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
            'id' => $this->id,
            'gapok' => $this->gapok,
            'tgl_lahir' => $this->tgl_lahir,
            'mulai_kerja' => $this->mulai_kerja,
            'wajibmasuk' => $this->wajibmasuk,
            'pengurang' => $this->pengurang,
            'indek' => $this->indek,
            'mulai_kontrak' => $this->mulai_kontrak,
            'cuti_diambil' => $this->cuti_diambil,
            'dankes' => $this->dankes,
        ]);

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'jbtn', $this->jbtn])
            ->andFilterWhere(['like', 'jnj_jabatan', $this->jnj_jabatan])
            ->andFilterWhere(['like', 'kode_kelompok', $this->kode_kelompok])
            ->andFilterWhere(['like', 'kode_resiko', $this->kode_resiko])
            ->andFilterWhere(['like', 'kode_emergency', $this->kode_emergency])
            ->andFilterWhere(['like', 'departemen', $this->departemen])
            ->andFilterWhere(['like', 'bidang', $this->bidang])
            ->andFilterWhere(['like', 'stts_wp', $this->stts_wp])
            ->andFilterWhere(['like', 'stts_kerja', $this->stts_kerja])
            ->andFilterWhere(['like', 'npwp', $this->npwp])
            ->andFilterWhere(['like', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['like', 'tmp_lahir', $this->tmp_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'ms_kerja', $this->ms_kerja])
            ->andFilterWhere(['like', 'indexins', $this->indexins])
            ->andFilterWhere(['like', 'bpd', $this->bpd])
            ->andFilterWhere(['like', 'rekening', $this->rekening])
            ->andFilterWhere(['like', 'stts_aktif', $this->stts_aktif])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp]);

        return $dataProvider;
    }
}
