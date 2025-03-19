<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailObatRacikanJual;

/**
 * DetailObatRacikanJualSearch represents the model behind the search form of `frontend\models\DetailObatRacikanJual`.
 */
class DetailObatRacikanJualSearch extends DetailObatRacikanJual
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'no_racik', 'kode_brng'], 'safe'],
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
        $query = DetailObatRacikanJual::find();

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
        $query->andFilterWhere(['like', 'nota_jual', $this->nota_jual])
            ->andFilterWhere(['like', 'no_racik', $this->no_racik])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng]);

        return $dataProvider;
    }
}
