<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MonitoringAsuhanGizi;

/**
 * MonitoringAsuhanGiziSearch represents the model behind the search form of `frontend\models\MonitoringAsuhanGizi`.
 */
class MonitoringAsuhanGiziSearch extends MonitoringAsuhanGizi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'monitoring', 'evaluasi', 'nip'], 'safe'],
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
        $query = MonitoringAsuhanGizi::find();

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
            ->andFilterWhere(['like', 'monitoring', $this->monitoring])
            ->andFilterWhere(['like', 'evaluasi', $this->evaluasi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
