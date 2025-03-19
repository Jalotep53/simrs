<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TemplateHasilRadiologi;

/**
 * TemplateHasilRadiologiSearch represents the model behind the search form of `frontend\models\TemplateHasilRadiologi`.
 */
class TemplateHasilRadiologiSearch extends TemplateHasilRadiologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_template', 'nama_pemeriksaan', 'template_hasil_radiologi'], 'safe'],
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
        $query = TemplateHasilRadiologi::find();

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
        $query->andFilterWhere(['like', 'no_template', $this->no_template])
            ->andFilterWhere(['like', 'nama_pemeriksaan', $this->nama_pemeriksaan])
            ->andFilterWhere(['like', 'template_hasil_radiologi', $this->template_hasil_radiologi]);

        return $dataProvider;
    }
}
