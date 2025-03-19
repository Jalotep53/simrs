<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TemplatePemeriksaanDokterPenyakit;

/**
 * TemplatePemeriksaanDokterPenyakitSearch represents the model behind the search form of `frontend\models\TemplatePemeriksaanDokterPenyakit`.
 */
class TemplatePemeriksaanDokterPenyakitSearch extends TemplatePemeriksaanDokterPenyakit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'kd_penyakit'], 'safe'],
            [['urut'], 'integer'],
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
        $query = TemplatePemeriksaanDokterPenyakit::find();

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
            'urut' => $this->urut,
        ]);

        $query->andFilterWhere(['like', 'no_template', $this->no_template])
            ->andFilterWhere(['like', 'kd_penyakit', $this->kd_penyakit]);

        return $dataProvider;
    }
}
