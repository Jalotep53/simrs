<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Gambar;

/**
 * GambarSearch represents the model behind the search form of `frontend\models\Gambar`.
 */
class GambarSearch extends Gambar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inde'], 'integer'],
            [['bpjs', 'nyeri', 'inhealth'], 'safe'],
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
        $query = Gambar::find();

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
            'inde' => $this->inde,
        ]);

        $query->andFilterWhere(['like', 'bpjs', $this->bpjs])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'inhealth', $this->inhealth]);

        return $dataProvider;
    }
}
