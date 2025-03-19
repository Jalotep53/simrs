<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdPemisahanKomponen;

/**
 * UtdPemisahanKomponenSearch represents the model behind the search form of `frontend\models\UtdPemisahanKomponen`.
 */
class UtdPemisahanKomponenSearch extends UtdPemisahanKomponen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor', 'tanggal', 'dinas', 'nip'], 'safe'],
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
        $query = UtdPemisahanKomponen::find();

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

        $query->andFilterWhere(['like', 'no_donor', $this->no_donor])
            ->andFilterWhere(['like', 'dinas', $this->dinas])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
