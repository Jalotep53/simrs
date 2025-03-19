<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JasaLain;

/**
 * JasaLainSearch represents the model behind the search form of `frontend\models\JasaLain`.
 */
class JasaLainSearch extends JasaLain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn', 'ktg'], 'safe'],
            [['bln', 'id'], 'integer'],
            [['bsr_jasa'], 'number'],
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
        $query = JasaLain::find();

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
            'bln' => $this->bln,
            'id' => $this->id,
            'bsr_jasa' => $this->bsr_jasa,
        ]);

        $query->andFilterWhere(['like', 'ktg', $this->ktg]);

        return $dataProvider;
    }
}
