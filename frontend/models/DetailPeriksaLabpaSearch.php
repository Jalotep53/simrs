<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPeriksaLabpa;

/**
 * DetailPeriksaLabpaSearch represents the model behind the search form of `frontend\models\DetailPeriksaLabpa`.
 */
class DetailPeriksaLabpaSearch extends DetailPeriksaLabpa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'diagnosa_klinik', 'makroskopik', 'mikroskopik', 'kesimpulan', 'kesan'], 'safe'],
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
        $query = DetailPeriksaLabpa::find();

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
            'tgl_periksa' => $this->tgl_periksa,
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'diagnosa_klinik', $this->diagnosa_klinik])
            ->andFilterWhere(['like', 'makroskopik', $this->makroskopik])
            ->andFilterWhere(['like', 'mikroskopik', $this->mikroskopik])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'kesan', $this->kesan]);

        return $dataProvider;
    }
}
