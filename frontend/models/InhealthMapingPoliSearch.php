<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\InhealthMapingPoli;

/**
 * InhealthMapingPoliSearch represents the model behind the search form of `frontend\models\InhealthMapingPoli`.
 */
class InhealthMapingPoliSearch extends InhealthMapingPoli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli_rs', 'kd_poli_inhealth', 'nm_poli_inhealth'], 'safe'],
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
        $query = InhealthMapingPoli::find();

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
        $query->andFilterWhere(['like', 'kd_poli_rs', $this->kd_poli_rs])
            ->andFilterWhere(['like', 'kd_poli_inhealth', $this->kd_poli_inhealth])
            ->andFilterWhere(['like', 'nm_poli_inhealth', $this->nm_poli_inhealth]);

        return $dataProvider;
    }
}
