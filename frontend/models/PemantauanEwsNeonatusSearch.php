<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemantauanEwsNeonatus;

/**
 * PemantauanEwsNeonatusSearch represents the model behind the search form of `frontend\models\PemantauanEwsNeonatus`.
 */
class PemantauanEwsNeonatusSearch extends PemantauanEwsNeonatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'parameter1', 'skor1', 'parameter2', 'skor2', 'parameter3', 'skor3', 'parameter4', 'skor4', 'parameter5', 'skor5', 'parameter6', 'skor6', 'parameter7', 'skor7', 'parameter8', 'skor8', 'skor_total', 'parameter_total', 'code_blue', 'nip'], 'safe'],
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
        $query = PemantauanEwsNeonatus::find();

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
            ->andFilterWhere(['like', 'parameter1', $this->parameter1])
            ->andFilterWhere(['like', 'skor1', $this->skor1])
            ->andFilterWhere(['like', 'parameter2', $this->parameter2])
            ->andFilterWhere(['like', 'skor2', $this->skor2])
            ->andFilterWhere(['like', 'parameter3', $this->parameter3])
            ->andFilterWhere(['like', 'skor3', $this->skor3])
            ->andFilterWhere(['like', 'parameter4', $this->parameter4])
            ->andFilterWhere(['like', 'skor4', $this->skor4])
            ->andFilterWhere(['like', 'parameter5', $this->parameter5])
            ->andFilterWhere(['like', 'skor5', $this->skor5])
            ->andFilterWhere(['like', 'parameter6', $this->parameter6])
            ->andFilterWhere(['like', 'skor6', $this->skor6])
            ->andFilterWhere(['like', 'parameter7', $this->parameter7])
            ->andFilterWhere(['like', 'skor7', $this->skor7])
            ->andFilterWhere(['like', 'parameter8', $this->parameter8])
            ->andFilterWhere(['like', 'skor8', $this->skor8])
            ->andFilterWhere(['like', 'skor_total', $this->skor_total])
            ->andFilterWhere(['like', 'parameter_total', $this->parameter_total])
            ->andFilterWhere(['like', 'code_blue', $this->code_blue])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
