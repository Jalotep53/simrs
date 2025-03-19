<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ObatbhpOk;

/**
 * ObatbhpOkSearch represents the model behind the search form of `frontend\models\ObatbhpOk`.
 */
class ObatbhpOkSearch extends ObatbhpOk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_obat', 'nm_obat', 'kode_sat'], 'safe'],
            [['hargasatuan'], 'number'],
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
        $query = ObatbhpOk::find();

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
            'hargasatuan' => $this->hargasatuan,
        ]);

        $query->andFilterWhere(['like', 'kd_obat', $this->kd_obat])
            ->andFilterWhere(['like', 'nm_obat', $this->nm_obat])
            ->andFilterWhere(['like', 'kode_sat', $this->kode_sat]);

        return $dataProvider;
    }
}
