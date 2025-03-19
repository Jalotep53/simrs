<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MppEvaluasiCatatan;

/**
 * MppEvaluasiCatatanSearch represents the model behind the search form of `frontend\models\MppEvaluasiCatatan`.
 */
class MppEvaluasiCatatanSearch extends MppEvaluasiCatatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_implementasi', 'masalah', 'tinjut', 'evaluasi', 'nip'], 'safe'],
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
        $query = MppEvaluasiCatatan::find();

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
            'tgl_implementasi' => $this->tgl_implementasi,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'masalah', $this->masalah])
            ->andFilterWhere(['like', 'tinjut', $this->tinjut])
            ->andFilterWhere(['like', 'evaluasi', $this->evaluasi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
