<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\K3rsLokasiKejadian;

/**
 * K3rsLokasiKejadianSearch represents the model behind the search form of `frontend\models\K3rsLokasiKejadian`.
 */
class K3rsLokasiKejadianSearch extends K3rsLokasiKejadian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_lokasi', 'lokasi_kejadian'], 'safe'],
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
        $query = K3rsLokasiKejadian::find();

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
        $query->andFilterWhere(['like', 'kode_lokasi', $this->kode_lokasi])
            ->andFilterWhere(['like', 'lokasi_kejadian', $this->lokasi_kejadian]);

        return $dataProvider;
    }
}
