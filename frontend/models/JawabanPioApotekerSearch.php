<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JawabanPioApoteker;

/**
 * JawabanPioApotekerSearch represents the model behind the search form of `frontend\models\JawabanPioApoteker`.
 */
class JawabanPioApotekerSearch extends JawabanPioApoteker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'tanggal_jawab', 'metode', 'penyampaian_jawaban', 'jawaban', 'referensi', 'nip'], 'safe'],
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
        $query = JawabanPioApoteker::find();

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
            'tanggal_jawab' => $this->tanggal_jawab,
        ]);

        $query->andFilterWhere(['like', 'no_permintaan', $this->no_permintaan])
            ->andFilterWhere(['like', 'metode', $this->metode])
            ->andFilterWhere(['like', 'penyampaian_jawaban', $this->penyampaian_jawaban])
            ->andFilterWhere(['like', 'jawaban', $this->jawaban])
            ->andFilterWhere(['like', 'referensi', $this->referensi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
