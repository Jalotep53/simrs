<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MatrikAkunJnsPerawatanInap;

/**
 * MatrikAkunJnsPerawatanInapSearch represents the model behind the search form of `frontend\models\MatrikAkunJnsPerawatanInap`.
 */
class MatrikAkunJnsPerawatanInapSearch extends MatrikAkunJnsPerawatanInap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'pendapatan_tindakan', 'beban_jasa_dokter', 'utang_jasa_dokter', 'beban_jasa_paramedis', 'utang_jasa_paramedis', 'beban_kso', 'utang_kso', 'hpp_persediaan', 'persediaan_bhp', 'beban_jasa_sarana', 'utang_jasa_sarana', 'beban_menejemen', 'utang_menejemen'], 'safe'],
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
        $query = MatrikAkunJnsPerawatanInap::find();

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
        $query->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'pendapatan_tindakan', $this->pendapatan_tindakan])
            ->andFilterWhere(['like', 'beban_jasa_dokter', $this->beban_jasa_dokter])
            ->andFilterWhere(['like', 'utang_jasa_dokter', $this->utang_jasa_dokter])
            ->andFilterWhere(['like', 'beban_jasa_paramedis', $this->beban_jasa_paramedis])
            ->andFilterWhere(['like', 'utang_jasa_paramedis', $this->utang_jasa_paramedis])
            ->andFilterWhere(['like', 'beban_kso', $this->beban_kso])
            ->andFilterWhere(['like', 'utang_kso', $this->utang_kso])
            ->andFilterWhere(['like', 'hpp_persediaan', $this->hpp_persediaan])
            ->andFilterWhere(['like', 'persediaan_bhp', $this->persediaan_bhp])
            ->andFilterWhere(['like', 'beban_jasa_sarana', $this->beban_jasa_sarana])
            ->andFilterWhere(['like', 'utang_jasa_sarana', $this->utang_jasa_sarana])
            ->andFilterWhere(['like', 'beban_menejemen', $this->beban_menejemen])
            ->andFilterWhere(['like', 'utang_menejemen', $this->utang_menejemen]);

        return $dataProvider;
    }
}
