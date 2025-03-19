<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanBedahMulut;

/**
 * PenilaianMedisRalanBedahMulutSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanBedahMulut`.
 */
class PenilaianMedisRalanBedahMulutSearch extends PenilaianMedisRalanBedahMulut
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpk', 'alergi', 'keadaan', 'kesadaran', 'nyeri', 'td', 'nadi', 'suhu', 'rr', 'bb', 'tb', 'status_nutrisi', 'kulit', 'keterangan_kulit', 'kepala', 'keterangan_kepala', 'mata', 'keterangan_mata', 'leher', 'keterangan_leher', 'kelenjar', 'keterangan_kelenjar', 'dada', 'keterangan_dada', 'perut', 'keterangan_perut', 'ekstremitas', 'keterangan_ekstremitas', 'wajah', 'intra', 'gigigeligi', 'lab', 'rad', 'penunjang', 'diagnosis', 'diagnosis2', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRalanBedahMulut::find();

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
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpk', $this->rpk])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'keadaan', $this->keadaan])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'status_nutrisi', $this->status_nutrisi])
            ->andFilterWhere(['like', 'kulit', $this->kulit])
            ->andFilterWhere(['like', 'keterangan_kulit', $this->keterangan_kulit])
            ->andFilterWhere(['like', 'kepala', $this->kepala])
            ->andFilterWhere(['like', 'keterangan_kepala', $this->keterangan_kepala])
            ->andFilterWhere(['like', 'mata', $this->mata])
            ->andFilterWhere(['like', 'keterangan_mata', $this->keterangan_mata])
            ->andFilterWhere(['like', 'leher', $this->leher])
            ->andFilterWhere(['like', 'keterangan_leher', $this->keterangan_leher])
            ->andFilterWhere(['like', 'kelenjar', $this->kelenjar])
            ->andFilterWhere(['like', 'keterangan_kelenjar', $this->keterangan_kelenjar])
            ->andFilterWhere(['like', 'dada', $this->dada])
            ->andFilterWhere(['like', 'keterangan_dada', $this->keterangan_dada])
            ->andFilterWhere(['like', 'perut', $this->perut])
            ->andFilterWhere(['like', 'keterangan_perut', $this->keterangan_perut])
            ->andFilterWhere(['like', 'ekstremitas', $this->ekstremitas])
            ->andFilterWhere(['like', 'keterangan_ekstremitas', $this->keterangan_ekstremitas])
            ->andFilterWhere(['like', 'wajah', $this->wajah])
            ->andFilterWhere(['like', 'intra', $this->intra])
            ->andFilterWhere(['like', 'gigigeligi', $this->gigigeligi])
            ->andFilterWhere(['like', 'lab', $this->lab])
            ->andFilterWhere(['like', 'rad', $this->rad])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'diagnosis2', $this->diagnosis2])
            ->andFilterWhere(['like', 'permasalahan', $this->permasalahan])
            ->andFilterWhere(['like', 'terapi', $this->terapi])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
