<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatDiagnosticreportRadiologi;

/**
 * SatuSehatDiagnosticreportRadiologiSearch represents the model behind the search form of `frontend\models\SatuSehatDiagnosticreportRadiologi`.
 */
class SatuSehatDiagnosticreportRadiologiSearch extends SatuSehatDiagnosticreportRadiologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'kd_jenis_prw', 'id_diagnosticreport'], 'safe'],
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
        $query = SatuSehatDiagnosticreportRadiologi::find();

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
        $query->andFilterWhere(['like', 'noorder', $this->noorder])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'id_diagnosticreport', $this->id_diagnosticreport]);

        return $dataProvider;
    }
}
