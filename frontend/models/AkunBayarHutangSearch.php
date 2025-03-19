<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AkunBayarHutang;

/**
 * AkunBayarHutangSearch represents the model behind the search form of `frontend\models\AkunBayarHutang`.
 */
class AkunBayarHutangSearch extends AkunBayarHutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_bayar', 'kd_rek'], 'safe'],
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
        $query = AkunBayarHutang::find();

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
        $query->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek]);

        return $dataProvider;
    }
}
