<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BiayaHarian;

/**
 * BiayaHarianSearch represents the model behind the search form of `frontend\models\BiayaHarian`.
 */
class BiayaHarianSearch extends BiayaHarian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_kamar', 'nama_biaya'], 'safe'],
            [['besar_biaya'], 'number'],
            [['jml'], 'integer'],
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
        $query = BiayaHarian::find();

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
            'besar_biaya' => $this->besar_biaya,
            'jml' => $this->jml,
        ]);

        $query->andFilterWhere(['like', 'kd_kamar', $this->kd_kamar])
            ->andFilterWhere(['like', 'nama_biaya', $this->nama_biaya]);

        return $dataProvider;
    }
}
