<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingDepartemen;

/**
 * SatuSehatMappingDepartemenSearch represents the model behind the search form of `frontend\models\SatuSehatMappingDepartemen`.
 */
class SatuSehatMappingDepartemenSearch extends SatuSehatMappingDepartemen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_id', 'id_organisasi_satusehat'], 'safe'],
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
        $query = SatuSehatMappingDepartemen::find();

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
        $query->andFilterWhere(['like', 'dep_id', $this->dep_id])
            ->andFilterWhere(['like', 'id_organisasi_satusehat', $this->id_organisasi_satusehat]);

        return $dataProvider;
    }
}
