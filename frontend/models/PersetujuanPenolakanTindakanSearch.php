<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PersetujuanPenolakanTindakan;

/**
 * PersetujuanPenolakanTindakanSearch represents the model behind the search form of `frontend\models\PersetujuanPenolakanTindakan`.
 */
class PersetujuanPenolakanTindakanSearch extends PersetujuanPenolakanTindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pernyataan', 'no_rawat', 'tanggal', 'diagnosa', 'diagnosa_konfirmasi', 'tindakan', 'tindakan_konfirmasi', 'indikasi_tindakan', 'indikasi_tindakan_konfirmasi', 'tata_cara', 'tata_cara_konfirmasi', 'tujuan', 'tujuan_konfirmasi', 'risiko', 'risiko_konfirmasi', 'komplikasi', 'komplikasi_konfirmasi', 'prognosis', 'prognosis_konfirmasi', 'alternatif_dan_risikonya', 'alternatif_konfirmasi', 'biaya_konfirmasi', 'lain_lain', 'lain_lain_konfirmasi', 'kd_dokter', 'nip', 'penerima_informasi', 'alasan_diwakilkan_penerima_informasi', 'jk_penerima_informasi', 'tanggal_lahir_penerima_informasi', 'umur_penerima_informasi', 'alamat_penerima_informasi', 'no_hp', 'hubungan_penerima_informasi', 'pernyataan', 'saksi_keluarga'], 'safe'],
            [['biaya'], 'number'],
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
        $query = PersetujuanPenolakanTindakan::find();

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
            'biaya' => $this->biaya,
            'tanggal_lahir_penerima_informasi' => $this->tanggal_lahir_penerima_informasi,
        ]);

        $query->andFilterWhere(['like', 'no_pernyataan', $this->no_pernyataan])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'diagnosa_konfirmasi', $this->diagnosa_konfirmasi])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'tindakan_konfirmasi', $this->tindakan_konfirmasi])
            ->andFilterWhere(['like', 'indikasi_tindakan', $this->indikasi_tindakan])
            ->andFilterWhere(['like', 'indikasi_tindakan_konfirmasi', $this->indikasi_tindakan_konfirmasi])
            ->andFilterWhere(['like', 'tata_cara', $this->tata_cara])
            ->andFilterWhere(['like', 'tata_cara_konfirmasi', $this->tata_cara_konfirmasi])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'tujuan_konfirmasi', $this->tujuan_konfirmasi])
            ->andFilterWhere(['like', 'risiko', $this->risiko])
            ->andFilterWhere(['like', 'risiko_konfirmasi', $this->risiko_konfirmasi])
            ->andFilterWhere(['like', 'komplikasi', $this->komplikasi])
            ->andFilterWhere(['like', 'komplikasi_konfirmasi', $this->komplikasi_konfirmasi])
            ->andFilterWhere(['like', 'prognosis', $this->prognosis])
            ->andFilterWhere(['like', 'prognosis_konfirmasi', $this->prognosis_konfirmasi])
            ->andFilterWhere(['like', 'alternatif_dan_risikonya', $this->alternatif_dan_risikonya])
            ->andFilterWhere(['like', 'alternatif_konfirmasi', $this->alternatif_konfirmasi])
            ->andFilterWhere(['like', 'biaya_konfirmasi', $this->biaya_konfirmasi])
            ->andFilterWhere(['like', 'lain_lain', $this->lain_lain])
            ->andFilterWhere(['like', 'lain_lain_konfirmasi', $this->lain_lain_konfirmasi])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'penerima_informasi', $this->penerima_informasi])
            ->andFilterWhere(['like', 'alasan_diwakilkan_penerima_informasi', $this->alasan_diwakilkan_penerima_informasi])
            ->andFilterWhere(['like', 'jk_penerima_informasi', $this->jk_penerima_informasi])
            ->andFilterWhere(['like', 'umur_penerima_informasi', $this->umur_penerima_informasi])
            ->andFilterWhere(['like', 'alamat_penerima_informasi', $this->alamat_penerima_informasi])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'hubungan_penerima_informasi', $this->hubungan_penerima_informasi])
            ->andFilterWhere(['like', 'pernyataan', $this->pernyataan])
            ->andFilterWhere(['like', 'saksi_keluarga', $this->saksi_keluarga]);

        return $dataProvider;
    }
}
