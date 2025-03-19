<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jumpasien;

/**
 * JumpasienSearch represents the model behind the search form of `frontend\models\Jumpasien`.
 */
class JumpasienSearch extends Jumpasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['thn'], 'safe'],
            [['bln', 'id', 'jml'], 'integer'],
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
        $query = Jumpasien::find();

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
            'jml' => $this->jml,
        ]);

        return $dataProvider;
    }
}
