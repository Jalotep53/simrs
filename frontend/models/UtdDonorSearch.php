<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdDonor;

/**
 * UtdDonorSearch represents the model behind the search form of `frontend\models\UtdDonor`.
 */
class UtdDonorSearch extends UtdDonor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor', 'no_pendonor', 'tanggal', 'dinas', 'tensi', 'jenis_bag', 'jenis_donor', 'tempat_aftap', 'petugas_aftap', 'hbsag', 'hcv', 'hiv', 'spilis', 'malaria', 'petugas_u_saring', 'status'], 'safe'],
            [['no_bag'], 'integer'],
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
        $query = UtdDonor::find();

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
            'no_bag' => $this->no_bag,
        ]);

        $query->andFilterWhere(['like', 'no_donor', $this->no_donor])
            ->andFilterWhere(['like', 'no_pendonor', $this->no_pendonor])
            ->andFilterWhere(['like', 'dinas', $this->dinas])
            ->andFilterWhere(['like', 'tensi', $this->tensi])
            ->andFilterWhere(['like', 'jenis_bag', $this->jenis_bag])
            ->andFilterWhere(['like', 'jenis_donor', $this->jenis_donor])
            ->andFilterWhere(['like', 'tempat_aftap', $this->tempat_aftap])
            ->andFilterWhere(['like', 'petugas_aftap', $this->petugas_aftap])
            ->andFilterWhere(['like', 'hbsag', $this->hbsag])
            ->andFilterWhere(['like', 'hcv', $this->hcv])
            ->andFilterWhere(['like', 'hiv', $this->hiv])
            ->andFilterWhere(['like', 'spilis', $this->spilis])
            ->andFilterWhere(['like', 'malaria', $this->malaria])
            ->andFilterWhere(['like', 'petugas_u_saring', $this->petugas_u_saring])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
