<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingVaksin;

/**
 * SatuSehatMappingVaksinSearch represents the model behind the search form of `frontend\models\SatuSehatMappingVaksin`.
 */
class SatuSehatMappingVaksinSearch extends SatuSehatMappingVaksin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'vaksin_code', 'vaksin_system', 'vaksin_display', 'route_code', 'route_system', 'route_display', 'dose_quantity_code', 'dose_quantity_system', 'dose_quantity_unit'], 'safe'],
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
        $query = SatuSehatMappingVaksin::find();

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
        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'vaksin_code', $this->vaksin_code])
            ->andFilterWhere(['like', 'vaksin_system', $this->vaksin_system])
            ->andFilterWhere(['like', 'vaksin_display', $this->vaksin_display])
            ->andFilterWhere(['like', 'route_code', $this->route_code])
            ->andFilterWhere(['like', 'route_system', $this->route_system])
            ->andFilterWhere(['like', 'route_display', $this->route_display])
            ->andFilterWhere(['like', 'dose_quantity_code', $this->dose_quantity_code])
            ->andFilterWhere(['like', 'dose_quantity_system', $this->dose_quantity_system])
            ->andFilterWhere(['like', 'dose_quantity_unit', $this->dose_quantity_unit]);

        return $dataProvider;
    }
}
