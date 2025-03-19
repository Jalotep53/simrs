<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilTindakanEswl;

/**
 * HasilTindakanEswlSearch represents the model behind the search form of `frontend\models\HasilTindakanEswl`.
 */
class HasilTindakanEswlSearch extends HasilTindakanEswl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'kd_dokter', 'nip', 'diagnosa', 'tindakan', 'obat_analgesik', 'obat_lain', 'uraian_tindakan', 'uraian_tindakan_focus', 'uraian_tindakan_rate', 'uraian_tindakan_power', 'uraian_tindakan_shock', 'diintegrasi', 'kekurangan', 'anjungan'], 'safe'],
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
        $query = HasilTindakanEswl::find();

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
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'obat_analgesik', $this->obat_analgesik])
            ->andFilterWhere(['like', 'obat_lain', $this->obat_lain])
            ->andFilterWhere(['like', 'uraian_tindakan', $this->uraian_tindakan])
            ->andFilterWhere(['like', 'uraian_tindakan_focus', $this->uraian_tindakan_focus])
            ->andFilterWhere(['like', 'uraian_tindakan_rate', $this->uraian_tindakan_rate])
            ->andFilterWhere(['like', 'uraian_tindakan_power', $this->uraian_tindakan_power])
            ->andFilterWhere(['like', 'uraian_tindakan_shock', $this->uraian_tindakan_shock])
            ->andFilterWhere(['like', 'diintegrasi', $this->diintegrasi])
            ->andFilterWhere(['like', 'kekurangan', $this->kekurangan])
            ->andFilterWhere(['like', 'anjungan', $this->anjungan]);

        return $dataProvider;
    }
}
