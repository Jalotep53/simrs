<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingLab;

/**
 * SatuSehatMappingLabSearch represents the model behind the search form of `frontend\models\SatuSehatMappingLab`.
 */
class SatuSehatMappingLabSearch extends SatuSehatMappingLab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_template'], 'integer'],
            [['code', 'system', 'display', 'sampel_code', 'sampel_system', 'sampel_display'], 'safe'],
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
        $query = SatuSehatMappingLab::find();

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
            'id_template' => $this->id_template,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'system', $this->system])
            ->andFilterWhere(['like', 'display', $this->display])
            ->andFilterWhere(['like', 'sampel_code', $this->sampel_code])
            ->andFilterWhere(['like', 'sampel_system', $this->sampel_system])
            ->andFilterWhere(['like', 'sampel_display', $this->sampel_display]);

        return $dataProvider;
    }
}
