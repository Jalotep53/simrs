<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ChecklistKriteriaMasukIcu;

/**
 * ChecklistKriteriaMasukIcuSearch represents the model behind the search form of `frontend\models\ChecklistKriteriaMasukIcu`.
 */
class ChecklistKriteriaMasukIcuSearch extends ChecklistKriteriaMasukIcu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'prioritas1_1', 'prioritas1_2', 'prioritas1_3', 'prioritas1_4', 'prioritas1_5', 'prioritas1_6', 'prioritas2_1', 'prioritas2_2', 'prioritas2_3', 'prioritas2_4', 'prioritas2_5', 'prioritas2_6', 'prioritas2_7', 'prioritas2_8', 'prioritas3_1', 'prioritas3_2', 'prioritas3_3', 'prioritas3_4', 'kriteria_fisiologis_tanda_vital_1', 'kriteria_fisiologis_tanda_vital_2', 'kriteria_fisiologis_tanda_vital_3', 'kriteria_fisiologis_tanda_vital_4', 'kriteria_fisiologis_tanda_vital_5', 'kriteria_fisiologis_laborat_1', 'kriteria_fisiologis_laborat_2', 'kriteria_fisiologis_laborat_3', 'kriteria_fisiologis_laborat_4', 'kriteria_fisiologis_laborat_5', 'kriteria_fisiologis_laborat_6', 'kriteria_fisiologis_radiologi_1', 'kriteria_fisiologis_radiologi_2', 'kriteria_fisiologis_klinis_1', 'kriteria_fisiologis_klinis_2', 'kriteria_fisiologis_klinis_3', 'kriteria_fisiologis_klinis_4', 'kriteria_fisiologis_klinis_5', 'kriteria_fisiologis_klinis_6', 'kriteria_fisiologis_klinis_7', 'kriteria_fisiologis_klinis_8', 'nik'], 'safe'],
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
        $query = ChecklistKriteriaMasukIcu::find();

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
            ->andFilterWhere(['like', 'prioritas1_1', $this->prioritas1_1])
            ->andFilterWhere(['like', 'prioritas1_2', $this->prioritas1_2])
            ->andFilterWhere(['like', 'prioritas1_3', $this->prioritas1_3])
            ->andFilterWhere(['like', 'prioritas1_4', $this->prioritas1_4])
            ->andFilterWhere(['like', 'prioritas1_5', $this->prioritas1_5])
            ->andFilterWhere(['like', 'prioritas1_6', $this->prioritas1_6])
            ->andFilterWhere(['like', 'prioritas2_1', $this->prioritas2_1])
            ->andFilterWhere(['like', 'prioritas2_2', $this->prioritas2_2])
            ->andFilterWhere(['like', 'prioritas2_3', $this->prioritas2_3])
            ->andFilterWhere(['like', 'prioritas2_4', $this->prioritas2_4])
            ->andFilterWhere(['like', 'prioritas2_5', $this->prioritas2_5])
            ->andFilterWhere(['like', 'prioritas2_6', $this->prioritas2_6])
            ->andFilterWhere(['like', 'prioritas2_7', $this->prioritas2_7])
            ->andFilterWhere(['like', 'prioritas2_8', $this->prioritas2_8])
            ->andFilterWhere(['like', 'prioritas3_1', $this->prioritas3_1])
            ->andFilterWhere(['like', 'prioritas3_2', $this->prioritas3_2])
            ->andFilterWhere(['like', 'prioritas3_3', $this->prioritas3_3])
            ->andFilterWhere(['like', 'prioritas3_4', $this->prioritas3_4])
            ->andFilterWhere(['like', 'kriteria_fisiologis_tanda_vital_1', $this->kriteria_fisiologis_tanda_vital_1])
            ->andFilterWhere(['like', 'kriteria_fisiologis_tanda_vital_2', $this->kriteria_fisiologis_tanda_vital_2])
            ->andFilterWhere(['like', 'kriteria_fisiologis_tanda_vital_3', $this->kriteria_fisiologis_tanda_vital_3])
            ->andFilterWhere(['like', 'kriteria_fisiologis_tanda_vital_4', $this->kriteria_fisiologis_tanda_vital_4])
            ->andFilterWhere(['like', 'kriteria_fisiologis_tanda_vital_5', $this->kriteria_fisiologis_tanda_vital_5])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_1', $this->kriteria_fisiologis_laborat_1])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_2', $this->kriteria_fisiologis_laborat_2])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_3', $this->kriteria_fisiologis_laborat_3])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_4', $this->kriteria_fisiologis_laborat_4])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_5', $this->kriteria_fisiologis_laborat_5])
            ->andFilterWhere(['like', 'kriteria_fisiologis_laborat_6', $this->kriteria_fisiologis_laborat_6])
            ->andFilterWhere(['like', 'kriteria_fisiologis_radiologi_1', $this->kriteria_fisiologis_radiologi_1])
            ->andFilterWhere(['like', 'kriteria_fisiologis_radiologi_2', $this->kriteria_fisiologis_radiologi_2])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_1', $this->kriteria_fisiologis_klinis_1])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_2', $this->kriteria_fisiologis_klinis_2])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_3', $this->kriteria_fisiologis_klinis_3])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_4', $this->kriteria_fisiologis_klinis_4])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_5', $this->kriteria_fisiologis_klinis_5])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_6', $this->kriteria_fisiologis_klinis_6])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_7', $this->kriteria_fisiologis_klinis_7])
            ->andFilterWhere(['like', 'kriteria_fisiologis_klinis_8', $this->kriteria_fisiologis_klinis_8])
            ->andFilterWhere(['like', 'nik', $this->nik]);

        return $dataProvider;
    }
}
