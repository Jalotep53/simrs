<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SigninSebelumAnestesi;

/**
 * SigninSebelumAnestesiSearch represents the model behind the search form of `frontend\models\SigninSebelumAnestesi`.
 */
class SigninSebelumAnestesiSearch extends SigninSebelumAnestesi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'sncn', 'tindakan', 'kd_dokter_bedah', 'kd_dokter_anestesi', 'identitas', 'penandaan_area_operasi', 'alergi', 'resiko_aspirasi', 'resiko_aspirasi_rencana_antisipasi', 'resiko_kehilangan_darah', 'resiko_kehilangan_darah_line', 'resiko_kehilangan_darah_rencana_antisipasi', 'kesiapan_alat_obat_anestesi', 'kesiapan_alat_obat_anestesi_rencana_antisipasi', 'nip_perawat_ok'], 'safe'],
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
        $query = SigninSebelumAnestesi::find();

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
            ->andFilterWhere(['like', 'identitas', $this->identitas])
            ->andFilterWhere(['like', 'penandaan_area_operasi', $this->penandaan_area_operasi])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'resiko_aspirasi', $this->resiko_aspirasi])
            ->andFilterWhere(['like', 'resiko_aspirasi_rencana_antisipasi', $this->resiko_aspirasi_rencana_antisipasi])
            ->andFilterWhere(['like', 'resiko_kehilangan_darah', $this->resiko_kehilangan_darah])
            ->andFilterWhere(['like', 'resiko_kehilangan_darah_line', $this->resiko_kehilangan_darah_line])
            ->andFilterWhere(['like', 'resiko_kehilangan_darah_rencana_antisipasi', $this->resiko_kehilangan_darah_rencana_antisipasi])
            ->andFilterWhere(['like', 'kesiapan_alat_obat_anestesi', $this->kesiapan_alat_obat_anestesi])
            ->andFilterWhere(['like', 'kesiapan_alat_obat_anestesi_rencana_antisipasi', $this->kesiapan_alat_obat_anestesi_rencana_antisipasi])
            ->andFilterWhere(['like', 'nip_perawat_ok', $this->nip_perawat_ok]);

        return $dataProvider;
    }
}
