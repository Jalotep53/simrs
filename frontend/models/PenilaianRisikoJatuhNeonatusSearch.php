<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianRisikoJatuhNeonatus;

/**
 * PenilaianRisikoJatuhNeonatusSearch represents the model behind the search form of `frontend\models\PenilaianRisikoJatuhNeonatus`.
 */
class PenilaianRisikoJatuhNeonatusSearch extends PenilaianRisikoJatuhNeonatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'intervensi1', 'intervensi2', 'intervensi3', 'intervensi4', 'intervensi5', 'intervensi6', 'intervensi7', 'intervensi8', 'intervensi9', 'edukasi1', 'edukasi2', 'edukasi3', 'edukasi4', 'edukasi5', 'sasaran1', 'sasaran2', 'sasaran3', 'sasaran4', 'evaluasi1', 'evaluasi2', 'evaluasi3', 'nip'], 'safe'],
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
        $query = PenilaianRisikoJatuhNeonatus::find();

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
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'intervensi1', $this->intervensi1])
            ->andFilterWhere(['like', 'intervensi2', $this->intervensi2])
            ->andFilterWhere(['like', 'intervensi3', $this->intervensi3])
            ->andFilterWhere(['like', 'intervensi4', $this->intervensi4])
            ->andFilterWhere(['like', 'intervensi5', $this->intervensi5])
            ->andFilterWhere(['like', 'intervensi6', $this->intervensi6])
            ->andFilterWhere(['like', 'intervensi7', $this->intervensi7])
            ->andFilterWhere(['like', 'intervensi8', $this->intervensi8])
            ->andFilterWhere(['like', 'intervensi9', $this->intervensi9])
            ->andFilterWhere(['like', 'edukasi1', $this->edukasi1])
            ->andFilterWhere(['like', 'edukasi2', $this->edukasi2])
            ->andFilterWhere(['like', 'edukasi3', $this->edukasi3])
            ->andFilterWhere(['like', 'edukasi4', $this->edukasi4])
            ->andFilterWhere(['like', 'edukasi5', $this->edukasi5])
            ->andFilterWhere(['like', 'sasaran1', $this->sasaran1])
            ->andFilterWhere(['like', 'sasaran2', $this->sasaran2])
            ->andFilterWhere(['like', 'sasaran3', $this->sasaran3])
            ->andFilterWhere(['like', 'sasaran4', $this->sasaran4])
            ->andFilterWhere(['like', 'evaluasi1', $this->evaluasi1])
            ->andFilterWhere(['like', 'evaluasi2', $this->evaluasi2])
            ->andFilterWhere(['like', 'evaluasi3', $this->evaluasi3])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
