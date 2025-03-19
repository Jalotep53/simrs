<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BridgingRujukanBpjsKhususDiagnosa;

/**
 * BridgingRujukanBpjsKhususDiagnosaSearch represents the model behind the search form of `frontend\models\BridgingRujukanBpjsKhususDiagnosa`.
 */
class BridgingRujukanBpjsKhususDiagnosaSearch extends BridgingRujukanBpjsKhususDiagnosa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rujukan', 'status', 'kode_diagnosa', 'nama_diagnosa'], 'safe'],
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
        $query = BridgingRujukanBpjsKhususDiagnosa::find();

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
        $query->andFilterWhere(['like', 'no_rujukan', $this->no_rujukan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kode_diagnosa', $this->kode_diagnosa])
            ->andFilterWhere(['like', 'nama_diagnosa', $this->nama_diagnosa]);

        return $dataProvider;
    }
}
