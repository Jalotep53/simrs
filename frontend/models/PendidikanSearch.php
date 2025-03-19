<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Pendidikan;

/**
 * PendidikanSearch represents the model behind the search form of `frontend\models\Pendidikan`.
 */
class PendidikanSearch extends Pendidikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tingkat'], 'safe'],
            [['indek', 'maksimal'], 'integer'],
            [['gapok1', 'kenaikan'], 'number'],
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
        $query = Pendidikan::find();

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
            'indek' => $this->indek,
            'gapok1' => $this->gapok1,
            'kenaikan' => $this->kenaikan,
            'maksimal' => $this->maksimal,
        ]);

        $query->andFilterWhere(['like', 'tingkat', $this->tingkat]);

        return $dataProvider;
    }
}
