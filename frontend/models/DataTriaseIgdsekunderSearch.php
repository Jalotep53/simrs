<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DataTriaseIgdsekunder;

/**
 * DataTriaseIgdsekunderSearch represents the model behind the search form of `frontend\models\DataTriaseIgdsekunder`.
 */
class DataTriaseIgdsekunderSearch extends DataTriaseIgdsekunder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'anamnesa_singkat', 'catatan', 'plan', 'tanggaltriase', 'nik'], 'safe'],
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
        $query = DataTriaseIgdsekunder::find();

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
            'tanggaltriase' => $this->tanggaltriase,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'anamnesa_singkat', $this->anamnesa_singkat])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
