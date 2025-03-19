<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Rekeningtahun;

/**
 * RekeningtahunSearch represents the model behind the search form of `frontend\models\Rekeningtahun`.
 */
class RekeningtahunSearch extends Rekeningtahun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn', 'kd_rek'], 'safe'],
            [['saldo_awal'], 'number'],
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
        $query = Rekeningtahun::find();

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
            'thn' => $this->thn,
            'saldo_awal' => $this->saldo_awal,
        ]);

        $query->andFilterWhere(['like', 'kd_rek', $this->kd_rek]);

        return $dataProvider;
    }
}
