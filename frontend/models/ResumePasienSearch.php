<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ResumePasien;

/**
 * ResumePasienSearch represents the model behind the search form of `frontend\models\ResumePasien`.
 */
class ResumePasienSearch extends ResumePasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_dokter', 'keluhan_utama', 'jalannya_penyakit', 'pemeriksaan_penunjang', 'hasil_laborat', 'diagnosa_utama', 'kd_diagnosa_utama', 'diagnosa_sekunder', 'kd_diagnosa_sekunder', 'diagnosa_sekunder2', 'kd_diagnosa_sekunder2', 'diagnosa_sekunder3', 'kd_diagnosa_sekunder3', 'diagnosa_sekunder4', 'kd_diagnosa_sekunder4', 'prosedur_utama', 'kd_prosedur_utama', 'prosedur_sekunder', 'kd_prosedur_sekunder', 'prosedur_sekunder2', 'kd_prosedur_sekunder2', 'prosedur_sekunder3', 'kd_prosedur_sekunder3', 'kondisi_pulang', 'obat_pulang'], 'safe'],
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
        $query = ResumePasien::find();

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
        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'jalannya_penyakit', $this->jalannya_penyakit])
            ->andFilterWhere(['like', 'pemeriksaan_penunjang', $this->pemeriksaan_penunjang])
            ->andFilterWhere(['like', 'hasil_laborat', $this->hasil_laborat])
            ->andFilterWhere(['like', 'diagnosa_utama', $this->diagnosa_utama])
            ->andFilterWhere(['like', 'kd_diagnosa_utama', $this->kd_diagnosa_utama])
            ->andFilterWhere(['like', 'diagnosa_sekunder', $this->diagnosa_sekunder])
            ->andFilterWhere(['like', 'kd_diagnosa_sekunder', $this->kd_diagnosa_sekunder])
            ->andFilterWhere(['like', 'diagnosa_sekunder2', $this->diagnosa_sekunder2])
            ->andFilterWhere(['like', 'kd_diagnosa_sekunder2', $this->kd_diagnosa_sekunder2])
            ->andFilterWhere(['like', 'diagnosa_sekunder3', $this->diagnosa_sekunder3])
            ->andFilterWhere(['like', 'kd_diagnosa_sekunder3', $this->kd_diagnosa_sekunder3])
            ->andFilterWhere(['like', 'diagnosa_sekunder4', $this->diagnosa_sekunder4])
            ->andFilterWhere(['like', 'kd_diagnosa_sekunder4', $this->kd_diagnosa_sekunder4])
            ->andFilterWhere(['like', 'prosedur_utama', $this->prosedur_utama])
            ->andFilterWhere(['like', 'kd_prosedur_utama', $this->kd_prosedur_utama])
            ->andFilterWhere(['like', 'prosedur_sekunder', $this->prosedur_sekunder])
            ->andFilterWhere(['like', 'kd_prosedur_sekunder', $this->kd_prosedur_sekunder])
            ->andFilterWhere(['like', 'prosedur_sekunder2', $this->prosedur_sekunder2])
            ->andFilterWhere(['like', 'kd_prosedur_sekunder2', $this->kd_prosedur_sekunder2])
            ->andFilterWhere(['like', 'prosedur_sekunder3', $this->prosedur_sekunder3])
            ->andFilterWhere(['like', 'kd_prosedur_sekunder3', $this->kd_prosedur_sekunder3])
            ->andFilterWhere(['like', 'kondisi_pulang', $this->kondisi_pulang])
            ->andFilterWhere(['like', 'obat_pulang', $this->obat_pulang]);

        return $dataProvider;
    }
}
