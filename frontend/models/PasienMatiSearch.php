<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PasienMati;

/**
 * PasienMatiSearch represents the model behind the search form of `frontend\models\PasienMati`.
 */
class PasienMatiSearch extends PasienMati
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rkm_medis', 'keterangan', 'temp_meninggal', 'icd1', 'icd2', 'icd3', 'icd4', 'kd_dokter'], 'safe'],
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
        $query = PasienMati::find();

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
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'temp_meninggal', $this->temp_meninggal])
            ->andFilterWhere(['like', 'icd1', $this->icd1])
            ->andFilterWhere(['like', 'icd2', $this->icd2])
            ->andFilterWhere(['like', 'icd3', $this->icd3])
            ->andFilterWhere(['like', 'icd4', $this->icd4])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter]);

        return $dataProvider;
    }
}
