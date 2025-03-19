<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingObat;

/**
 * SatuSehatMappingObatSearch represents the model behind the search form of `frontend\models\SatuSehatMappingObat`.
 */
class SatuSehatMappingObatSearch extends SatuSehatMappingObat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'obat_code', 'obat_system', 'obat_display', 'form_code', 'form_system', 'form_display', 'numerator_code', 'numerator_system', 'denominator_code', 'denominator_system', 'route_code', 'route_system', 'route_display'], 'safe'],
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
        $query = SatuSehatMappingObat::find();

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
            ->andFilterWhere(['like', 'obat_code', $this->obat_code])
            ->andFilterWhere(['like', 'obat_system', $this->obat_system])
            ->andFilterWhere(['like', 'obat_display', $this->obat_display])
            ->andFilterWhere(['like', 'form_code', $this->form_code])
            ->andFilterWhere(['like', 'form_system', $this->form_system])
            ->andFilterWhere(['like', 'form_display', $this->form_display])
            ->andFilterWhere(['like', 'numerator_code', $this->numerator_code])
            ->andFilterWhere(['like', 'numerator_system', $this->numerator_system])
            ->andFilterWhere(['like', 'denominator_code', $this->denominator_code])
            ->andFilterWhere(['like', 'denominator_system', $this->denominator_system])
            ->andFilterWhere(['like', 'route_code', $this->route_code])
            ->andFilterWhere(['like', 'route_system', $this->route_system])
            ->andFilterWhere(['like', 'route_display', $this->route_display]);

        return $dataProvider;
    }
}
