<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPreOperasi;

/**
 * PenilaianPreOperasiSearch represents the model behind the search form of `frontend\models\PenilaianPreOperasi`.
 */
class PenilaianPreOperasiSearch extends PenilaianPreOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'ringkasan_klinik', 'pemeriksaan_fisik', 'pemeriksaan_diagnostik', 'diagnosa_pre_operasi', 'rencana_tindakan_bedah', 'hal_hal_yang_perludi_persiapkan', 'terapi_pre_operasi'], 'safe'],
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
        $query = PenilaianPreOperasi::find();

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
            ->andFilterWhere(['like', 'ringkasan_klinik', $this->ringkasan_klinik])
            ->andFilterWhere(['like', 'pemeriksaan_fisik', $this->pemeriksaan_fisik])
            ->andFilterWhere(['like', 'pemeriksaan_diagnostik', $this->pemeriksaan_diagnostik])
            ->andFilterWhere(['like', 'diagnosa_pre_operasi', $this->diagnosa_pre_operasi])
            ->andFilterWhere(['like', 'rencana_tindakan_bedah', $this->rencana_tindakan_bedah])
            ->andFilterWhere(['like', 'hal_hal_yang_perludi_persiapkan', $this->hal_hal_yang_perludi_persiapkan])
            ->andFilterWhere(['like', 'terapi_pre_operasi', $this->terapi_pre_operasi]);

        return $dataProvider;
    }
}
