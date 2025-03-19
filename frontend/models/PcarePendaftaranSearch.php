<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PcarePendaftaran;

/**
 * PcarePendaftaranSearch represents the model behind the search form of `frontend\models\PcarePendaftaran`.
 */
class PcarePendaftaranSearch extends PcarePendaftaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tglDaftar', 'no_rkm_medis', 'nm_pasien', 'kdProviderPeserta', 'noKartu', 'kdPoli', 'nmPoli', 'keluhan', 'kunjSakit', 'sistole', 'diastole', 'beratBadan', 'tinggiBadan', 'respRate', 'lingkar_perut', 'heartRate', 'rujukBalik', 'kdTkp', 'noUrut', 'status'], 'safe'],
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
        $query = PcarePendaftaran::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'kdProviderPeserta', $this->kdProviderPeserta])
            ->andFilterWhere(['like', 'noKartu', $this->noKartu])
            ->andFilterWhere(['like', 'kdPoli', $this->kdPoli])
            ->andFilterWhere(['like', 'nmPoli', $this->nmPoli])
            ->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'kunjSakit', $this->kunjSakit])
            ->andFilterWhere(['like', 'sistole', $this->sistole])
            ->andFilterWhere(['like', 'diastole', $this->diastole])
            ->andFilterWhere(['like', 'beratBadan', $this->beratBadan])
            ->andFilterWhere(['like', 'tinggiBadan', $this->tinggiBadan])
            ->andFilterWhere(['like', 'respRate', $this->respRate])
            ->andFilterWhere(['like', 'lingkar_perut', $this->lingkar_perut])
            ->andFilterWhere(['like', 'heartRate', $this->heartRate])
            ->andFilterWhere(['like', 'rujukBalik', $this->rujukBalik])
            ->andFilterWhere(['like', 'kdTkp', $this->kdTkp])
            ->andFilterWhere(['like', 'noUrut', $this->noUrut])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
