<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SignoutSebelumMenutupLuka;

/**
 * SignoutSebelumMenutupLukaSearch represents the model behind the search form of `frontend\models\SignoutSebelumMenutupLuka`.
 */
class SignoutSebelumMenutupLukaSearch extends SignoutSebelumMenutupLuka
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi', 'verbal_tindakan', 'verbal_kelengkapan_kasa', 'verbal_instrumen', 'verbal_alat_tajam', 'kelengkapan_specimen_label', 'kelengkapan_specimen_formulir', 'peninjauan_kegiatan_dokter_bedah', 'peninjauan_kegiatan_dokter_anestesi', 'peninjauan_kegiatan_perawat_kamar_ok', 'perhatian_utama_fase_pemulihan', 'nip_perawat_ok'], 'safe'],
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
        $query = SignoutSebelumMenutupLuka::find();

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
            ->andFilterWhere(['like', 'sncn', $this->sncn])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'kd_dokter_bedah', $this->kd_dokter_bedah])
            ->andFilterWhere(['like', 'kd_dokter_anestesi', $this->kd_dokter_anestesi])
            ->andFilterWhere(['like', 'verbal_tindakan', $this->verbal_tindakan])
            ->andFilterWhere(['like', 'verbal_kelengkapan_kasa', $this->verbal_kelengkapan_kasa])
            ->andFilterWhere(['like', 'verbal_instrumen', $this->verbal_instrumen])
            ->andFilterWhere(['like', 'verbal_alat_tajam', $this->verbal_alat_tajam])
            ->andFilterWhere(['like', 'kelengkapan_specimen_label', $this->kelengkapan_specimen_label])
            ->andFilterWhere(['like', 'kelengkapan_specimen_formulir', $this->kelengkapan_specimen_formulir])
            ->andFilterWhere(['like', 'peninjauan_kegiatan_dokter_bedah', $this->peninjauan_kegiatan_dokter_bedah])
            ->andFilterWhere(['like', 'peninjauan_kegiatan_dokter_anestesi', $this->peninjauan_kegiatan_dokter_anestesi])
            ->andFilterWhere(['like', 'peninjauan_kegiatan_perawat_kamar_ok', $this->peninjauan_kegiatan_perawat_kamar_ok])
            ->andFilterWhere(['like', 'perhatian_utama_fase_pemulihan', $this->perhatian_utama_fase_pemulihan])
            ->andFilterWhere(['like', 'nip_perawat_ok', $this->nip_perawat_ok]);

        return $dataProvider;
    }
}
