<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiwayatPersalinanPasien;

/**
 * RiwayatPersalinanPasienSearch represents the model behind the search form of `frontend\models\RiwayatPersalinanPasien`.
 */
class RiwayatPersalinanPasienSearch extends RiwayatPersalinanPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'tgl_thn', 'tempat_persalinan', 'usia_hamil', 'jenis_persalinan', 'penolong', 'penyulit', 'jk', 'bbpb', 'keadaan'], 'safe'],
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
        $query = RiwayatPersalinanPasien::find();

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
        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'tgl_thn', $this->tgl_thn])
            ->andFilterWhere(['like', 'tempat_persalinan', $this->tempat_persalinan])
            ->andFilterWhere(['like', 'usia_hamil', $this->usia_hamil])
            ->andFilterWhere(['like', 'jenis_persalinan', $this->jenis_persalinan])
            ->andFilterWhere(['like', 'penolong', $this->penolong])
            ->andFilterWhere(['like', 'penyulit', $this->penyulit])
            ->andFilterWhere(['like', 'jk', $this->jk])
            ->andFilterWhere(['like', 'bbpb', $this->bbpb])
            ->andFilterWhere(['like', 'keadaan', $this->keadaan]);

        return $dataProvider;
    }
}
