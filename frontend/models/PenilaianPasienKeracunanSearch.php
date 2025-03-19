<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPasienKeracunan;

/**
 * PenilaianPasienKeracunanSearch represents the model behind the search form of `frontend\models\PenilaianPasienKeracunan`.
 */
class PenilaianPasienKeracunanSearch extends PenilaianPasienKeracunan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'tempat_kejadian', 'keterangan_tempat_kejadian', 'keluhan', 'riwayat_penyakit_sekarang', 'hamil', 'menyusui', 'penyebab', 'nama_bahan', 'jumlah_bahan', 'tipe_pemaparan', 'keterangan_tipe_pemaparan', 'tipe_kejadian', 'bau_bahan', 'keterangan_bau_bahan', 'pupil', 'keterangan_pupil', 'kesadaran', 'td', 'nadi', 'rr', 'suhu', 'spo', 'urine', 'pengobatan_sebelum_igd', 'diagnosis', 'pemeriksaan_penunjang', 'penatalaksanaan_diberikan', 'tindak_lanjut'], 'safe'],
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
        $query = PenilaianPasienKeracunan::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'tempat_kejadian', $this->tempat_kejadian])
            ->andFilterWhere(['like', 'keterangan_tempat_kejadian', $this->keterangan_tempat_kejadian])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'riwayat_penyakit_sekarang', $this->riwayat_penyakit_sekarang])
            ->andFilterWhere(['like', 'hamil', $this->hamil])
            ->andFilterWhere(['like', 'menyusui', $this->menyusui])
            ->andFilterWhere(['like', 'penyebab', $this->penyebab])
            ->andFilterWhere(['like', 'nama_bahan', $this->nama_bahan])
            ->andFilterWhere(['like', 'jumlah_bahan', $this->jumlah_bahan])
            ->andFilterWhere(['like', 'tipe_pemaparan', $this->tipe_pemaparan])
            ->andFilterWhere(['like', 'keterangan_tipe_pemaparan', $this->keterangan_tipe_pemaparan])
            ->andFilterWhere(['like', 'tipe_kejadian', $this->tipe_kejadian])
            ->andFilterWhere(['like', 'bau_bahan', $this->bau_bahan])
            ->andFilterWhere(['like', 'keterangan_bau_bahan', $this->keterangan_bau_bahan])
            ->andFilterWhere(['like', 'pupil', $this->pupil])
            ->andFilterWhere(['like', 'keterangan_pupil', $this->keterangan_pupil])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'spo', $this->spo])
            ->andFilterWhere(['like', 'urine', $this->urine])
            ->andFilterWhere(['like', 'pengobatan_sebelum_igd', $this->pengobatan_sebelum_igd])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang', $this->pemeriksaan_penunjang])
            ->andFilterWhere(['like', 'penatalaksanaan_diberikan', $this->penatalaksanaan_diberikan])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut]);

        return $dataProvider;
    }
}
