<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TelaahFarmasi;

/**
 * TelaahFarmasiSearch represents the model behind the search form of `frontend\models\TelaahFarmasi`.
 */
class TelaahFarmasiSearch extends TelaahFarmasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep', 'resep_identifikasi_pasien', 'resep_ket_identifikasi_pasien', 'resep_tepat_obat', 'resep_ket_tepat_obat', 'resep_tepat_dosis', 'resep_ket_tepat_dosis', 'resep_tepat_cara_pemberian', 'resep_ket_tepat_cara_pemberian', 'resep_tepat_waktu_pemberian', 'resep_ket_tepat_waktu_pemberian', 'resep_ada_tidak_duplikasi_obat', 'resep_ket_ada_tidak_duplikasi_obat', 'resep_interaksi_obat', 'resep_ket_interaksi_obat', 'resep_kontra_indikasi_obat', 'resep_ket_kontra_indikasi_obat', 'obat_tepat_pasien', 'obat_tepat_obat', 'obat_tepat_dosis', 'obat_tepat_cara_pemberian', 'obat_tepat_waktu_pemberian', 'nip'], 'safe'],
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
        $query = TelaahFarmasi::find();

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
        $query->andFilterWhere(['like', 'no_resep', $this->no_resep])
            ->andFilterWhere(['like', 'resep_identifikasi_pasien', $this->resep_identifikasi_pasien])
            ->andFilterWhere(['like', 'resep_ket_identifikasi_pasien', $this->resep_ket_identifikasi_pasien])
            ->andFilterWhere(['like', 'resep_tepat_obat', $this->resep_tepat_obat])
            ->andFilterWhere(['like', 'resep_ket_tepat_obat', $this->resep_ket_tepat_obat])
            ->andFilterWhere(['like', 'resep_tepat_dosis', $this->resep_tepat_dosis])
            ->andFilterWhere(['like', 'resep_ket_tepat_dosis', $this->resep_ket_tepat_dosis])
            ->andFilterWhere(['like', 'resep_tepat_cara_pemberian', $this->resep_tepat_cara_pemberian])
            ->andFilterWhere(['like', 'resep_ket_tepat_cara_pemberian', $this->resep_ket_tepat_cara_pemberian])
            ->andFilterWhere(['like', 'resep_tepat_waktu_pemberian', $this->resep_tepat_waktu_pemberian])
            ->andFilterWhere(['like', 'resep_ket_tepat_waktu_pemberian', $this->resep_ket_tepat_waktu_pemberian])
            ->andFilterWhere(['like', 'resep_ada_tidak_duplikasi_obat', $this->resep_ada_tidak_duplikasi_obat])
            ->andFilterWhere(['like', 'resep_ket_ada_tidak_duplikasi_obat', $this->resep_ket_ada_tidak_duplikasi_obat])
            ->andFilterWhere(['like', 'resep_interaksi_obat', $this->resep_interaksi_obat])
            ->andFilterWhere(['like', 'resep_ket_interaksi_obat', $this->resep_ket_interaksi_obat])
            ->andFilterWhere(['like', 'resep_kontra_indikasi_obat', $this->resep_kontra_indikasi_obat])
            ->andFilterWhere(['like', 'resep_ket_kontra_indikasi_obat', $this->resep_ket_kontra_indikasi_obat])
            ->andFilterWhere(['like', 'obat_tepat_pasien', $this->obat_tepat_pasien])
            ->andFilterWhere(['like', 'obat_tepat_obat', $this->obat_tepat_obat])
            ->andFilterWhere(['like', 'obat_tepat_dosis', $this->obat_tepat_dosis])
            ->andFilterWhere(['like', 'obat_tepat_cara_pemberian', $this->obat_tepat_cara_pemberian])
            ->andFilterWhere(['like', 'obat_tepat_waktu_pemberian', $this->obat_tepat_waktu_pemberian])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
