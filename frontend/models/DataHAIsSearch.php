<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataHAIs;

/**
 * DataHAIsSearch represents the model behind the search form of `frontend\models\DataHAIs`.
 */
class DataHAIsSearch extends DataHAIs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'no_rawat', 'DEKU', 'SPUTUM', 'DARAH', 'URINE', 'ANTIBIOTIK', 'kd_kamar'], 'safe'],
            [['ETT', 'CVL', 'IVL', 'UC', 'VAP', 'IAD', 'PLEB', 'ISK', 'ILO', 'HAP', 'Tinea', 'Scabies'], 'integer'],
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
        $query = DataHAIs::find();

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
            'ETT' => $this->ETT,
            'CVL' => $this->CVL,
            'IVL' => $this->IVL,
            'UC' => $this->UC,
            'VAP' => $this->VAP,
            'IAD' => $this->IAD,
            'PLEB' => $this->PLEB,
            'ISK' => $this->ISK,
            'ILO' => $this->ILO,
            'HAP' => $this->HAP,
            'Tinea' => $this->Tinea,
            'Scabies' => $this->Scabies,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'DEKU', $this->DEKU])
            ->andFilterWhere(['like', 'SPUTUM', $this->SPUTUM])
            ->andFilterWhere(['like', 'DARAH', $this->DARAH])
            ->andFilterWhere(['like', 'URINE', $this->URINE])
            ->andFilterWhere(['like', 'ANTIBIOTIK', $this->ANTIBIOTIK])
            ->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar]);

        return $dataProvider;
    }
}
