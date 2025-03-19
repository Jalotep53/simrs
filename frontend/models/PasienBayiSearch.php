<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PasienBayi;

/**
 * PasienBayiSearch represents the model behind the search form of `frontend\models\PasienBayi`.
 */
class PasienBayiSearch extends PasienBayi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'umur_ibu', 'nama_ayah', 'umur_ayah', 'berat_badan', 'panjang_badan', 'lingkar_kepala', 'proses_lahir', 'anakke', 'jam_lahir', 'keterangan', 'diagnosa', 'penyulit_kehamilan', 'ketuban', 'lingkar_perut', 'lingkar_dada', 'penolong', 'no_skl', 'g', 'p', 'a', 'f1', 'u1', 't1', 'r1', 'w1', 'n1', 'f5', 'u5', 't5', 'r5', 'w5', 'n5', 'f10', 'u10', 't10', 'r10', 'w10', 'n10', 'resusitas', 'obat_diberikan', 'mikasi', 'mikonium'], 'safe'],
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
        $query = PasienBayi::find();

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
            'jam_lahir' => $this->jam_lahir,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'umur_ibu', $this->umur_ibu])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'umur_ayah', $this->umur_ayah])
            ->andFilterWhere(['like', 'berat_badan', $this->berat_badan])
            ->andFilterWhere(['like', 'panjang_badan', $this->panjang_badan])
            ->andFilterWhere(['like', 'lingkar_kepala', $this->lingkar_kepala])
            ->andFilterWhere(['like', 'proses_lahir', $this->proses_lahir])
            ->andFilterWhere(['like', 'anakke', $this->anakke])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'penyulit_kehamilan', $this->penyulit_kehamilan])
            ->andFilterWhere(['like', 'ketuban', $this->ketuban])
            ->andFilterWhere(['like', 'lingkar_perut', $this->lingkar_perut])
            ->andFilterWhere(['like', 'lingkar_dada', $this->lingkar_dada])
            ->andFilterWhere(['like', 'penolong', $this->penolong])
            ->andFilterWhere(['like', 'no_skl', $this->no_skl])
            ->andFilterWhere(['like', 'g', $this->g])
            ->andFilterWhere(['like', 'p', $this->p])
            ->andFilterWhere(['like', 'a', $this->a])
            ->andFilterWhere(['like', 'f1', $this->f1])
            ->andFilterWhere(['like', 'u1', $this->u1])
            ->andFilterWhere(['like', 't1', $this->t1])
            ->andFilterWhere(['like', 'r1', $this->r1])
            ->andFilterWhere(['like', 'w1', $this->w1])
            ->andFilterWhere(['like', 'n1', $this->n1])
            ->andFilterWhere(['like', 'f5', $this->f5])
            ->andFilterWhere(['like', 'u5', $this->u5])
            ->andFilterWhere(['like', 't5', $this->t5])
            ->andFilterWhere(['like', 'r5', $this->r5])
            ->andFilterWhere(['like', 'w5', $this->w5])
            ->andFilterWhere(['like', 'n5', $this->n5])
            ->andFilterWhere(['like', 'f10', $this->f10])
            ->andFilterWhere(['like', 'u10', $this->u10])
            ->andFilterWhere(['like', 't10', $this->t10])
            ->andFilterWhere(['like', 'r10', $this->r10])
            ->andFilterWhere(['like', 'w10', $this->w10])
            ->andFilterWhere(['like', 'n10', $this->n10])
            ->andFilterWhere(['like', 'resusitas', $this->resusitas])
            ->andFilterWhere(['like', 'obat_diberikan', $this->obat_diberikan])
            ->andFilterWhere(['like', 'mikasi', $this->mikasi])
            ->andFilterWhere(['like', 'mikonium', $this->mikonium]);

        return $dataProvider;
    }
}
