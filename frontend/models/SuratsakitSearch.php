<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Suratsakit;

/**
 * SuratsakitSearch represents the model behind the search form of `frontend\models\Suratsakit`.
 */
class SuratsakitSearch extends Suratsakit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggalawal', 'tanggalakhir', 'lamasakit'], 'safe'],
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
        $query = Suratsakit::find();

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
            'tanggalawal' => $this->tanggalawal,
            'tanggalakhir' => $this->tanggalakhir,
        ]);

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'lamasakit', $this->lamasakit]);

        return $dataProvider;
    }
}
