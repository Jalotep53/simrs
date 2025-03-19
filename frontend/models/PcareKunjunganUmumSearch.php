<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PcareKunjunganUmum;

/**
 * PcareKunjunganUmumSearch represents the model behind the search form of `frontend\models\PcareKunjunganUmum`.
 */
class PcareKunjunganUmumSearch extends PcareKunjunganUmum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'noKunjungan', 'tglDaftar', 'no_rkm_medis', 'nm_pasien', 'noKartu', 'kdPoli', 'nmPoli', 'keluhan', 'kdSadar', 'nmSadar', 'sistole', 'diastole', 'beratBadan', 'tinggiBadan', 'respRate', 'heartRate', 'lingkarPerut', 'terapi', 'kdStatusPulang', 'nmStatusPulang', 'tglPulang', 'kdDokter', 'nmDokter', 'kdDiag1', 'nmDiag1', 'kdDiag2', 'nmDiag2', 'kdDiag3', 'nmDiag3', 'status', 'KdAlergiMakanan', 'NmAlergiMakanan', 'KdAlergiUdara', 'NmAlergiUdara', 'KdAlergiObat', 'NmAlergiObat', 'KdPrognosa', 'NmPrognosa', 'terapi_non_obat', 'bmhp'], 'safe'],
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
        $query = PcareKunjunganUmum::find();

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
            'tglDaftar' => $this->tglDaftar,
            'tglPulang' => $this->tglPulang,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'noKunjungan', $this->noKunjungan])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'noKartu', $this->noKartu])
            ->andFilterWhere(['like', 'kdPoli', $this->kdPoli])
            ->andFilterWhere(['like', 'nmPoli', $this->nmPoli])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'kdSadar', $this->kdSadar])
            ->andFilterWhere(['like', 'nmSadar', $this->nmSadar])
            ->andFilterWhere(['like', 'sistole', $this->sistole])
            ->andFilterWhere(['like', 'diastole', $this->diastole])
            ->andFilterWhere(['like', 'beratBadan', $this->beratBadan])
            ->andFilterWhere(['like', 'tinggiBadan', $this->tinggiBadan])
            ->andFilterWhere(['like', 'respRate', $this->respRate])
            ->andFilterWhere(['like', 'heartRate', $this->heartRate])
            ->andFilterWhere(['like', 'lingkarPerut', $this->lingkarPerut])
            ->andFilterWhere(['like', 'terapi', $this->terapi])
            ->andFilterWhere(['like', 'kdStatusPulang', $this->kdStatusPulang])
            ->andFilterWhere(['like', 'nmStatusPulang', $this->nmStatusPulang])
            ->andFilterWhere(['like', 'kdDokter', $this->kdDokter])
            ->andFilterWhere(['like', 'nmDokter', $this->nmDokter])
            ->andFilterWhere(['like', 'kdDiag1', $this->kdDiag1])
            ->andFilterWhere(['like', 'nmDiag1', $this->nmDiag1])
            ->andFilterWhere(['like', 'kdDiag2', $this->kdDiag2])
            ->andFilterWhere(['like', 'nmDiag2', $this->nmDiag2])
            ->andFilterWhere(['like', 'kdDiag3', $this->kdDiag3])
            ->andFilterWhere(['like', 'nmDiag3', $this->nmDiag3])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'KdAlergiMakanan', $this->KdAlergiMakanan])
            ->andFilterWhere(['like', 'NmAlergiMakanan', $this->NmAlergiMakanan])
            ->andFilterWhere(['like', 'KdAlergiUdara', $this->KdAlergiUdara])
            ->andFilterWhere(['like', 'NmAlergiUdara', $this->NmAlergiUdara])
            ->andFilterWhere(['like', 'KdAlergiObat', $this->KdAlergiObat])
            ->andFilterWhere(['like', 'NmAlergiObat', $this->NmAlergiObat])
            ->andFilterWhere(['like', 'KdPrognosa', $this->KdPrognosa])
            ->andFilterWhere(['like', 'NmPrognosa', $this->NmPrognosa])
            ->andFilterWhere(['like', 'terapi_non_obat', $this->terapi_non_obat])
            ->andFilterWhere(['like', 'bmhp', $this->bmhp]);

        return $dataProvider;
    }
}
