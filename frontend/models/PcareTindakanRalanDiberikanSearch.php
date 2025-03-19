<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PcareTindakanRalanDiberikan;

/**
 * PcareTindakanRalanDiberikanSearch represents the model behind the search form of `frontend\models\PcareTindakanRalanDiberikan`.
 */
class PcareTindakanRalanDiberikanSearch extends PcareTindakanRalanDiberikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'noKunjungan', 'kdTindakanSK', 'tgl_perawatan', 'jam', 'kd_jenis_prw'], 'safe'],
            [['material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'biaya_rawat'], 'number'],
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
        $query = PcareTindakanRalanDiberikan::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam' => $this->jam,
            'material' => $this->material,
            'bhp' => $this->bhp,
            'tarif_tindakandr' => $this->tarif_tindakandr,
            'tarif_tindakanpr' => $this->tarif_tindakanpr,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'biaya_rawat' => $this->biaya_rawat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'noKunjungan', $this->noKunjungan])
            ->andFilterWhere(['like', 'kdTindakanSK', $this->kdTindakanSK])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw]);

        return $dataProvider;
    }
}
