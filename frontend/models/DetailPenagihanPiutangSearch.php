<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPenagihanPiutang;

/**
 * DetailPenagihanPiutangSearch represents the model behind the search form of `frontend\models\DetailPenagihanPiutang`.
 */
class DetailPenagihanPiutangSearch extends DetailPenagihanPiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_tagihan', 'no_rawat'], 'safe'],
            [['sisapiutang'], 'number'],
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
        $query = DetailPenagihanPiutang::find();

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
            'sisapiutang' => $this->sisapiutang,
        ]);

        $query->andFilterWhere(['like', 'no_tagihan', $this->no_tagihan])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat]);

        return $dataProvider;
    }
}
