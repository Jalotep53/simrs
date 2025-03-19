<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ketidakhadiran;

/**
 * KetidakhadiranSearch represents the model behind the search form of `frontend\models\Ketidakhadiran`.
 */
class KetidakhadiranSearch extends Ketidakhadiran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl', 'jns', 'ktg'], 'safe'],
            [['id', 'jml'], 'integer'],
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
        $query = Ketidakhadiran::find();

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
            'tgl' => $this->tgl,
            'id' => $this->id,
            'jml' => $this->jml,
        ]);

        $query->andFilterWhere(['like', 'jns', $this->jns])
            ->andFilterWhere(['like', 'ktg', $this->ktg]);

        return $dataProvider;
    }
}
