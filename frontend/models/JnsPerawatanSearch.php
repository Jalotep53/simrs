<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JnsPerawatan;

/**
 * JnsPerawatanSearch represents the model behind the search form of `frontend\models\JnsPerawatan`.
 */
class JnsPerawatanSearch extends JnsPerawatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'nm_perawatan', 'kd_kategori', 'kd_pj', 'kd_poli', 'status'], 'safe'],
            [['material', 'bhp', 'tarif_tindakandr', 'tarif_tindakanpr', 'kso', 'menejemen', 'total_byrdr', 'total_byrpr', 'total_byrdrpr'], 'number'],
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
        $query = JnsPerawatan::find();

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
            'material' => $this->material,
            'bhp' => $this->bhp,
            'tarif_tindakandr' => $this->tarif_tindakandr,
            'tarif_tindakanpr' => $this->tarif_tindakanpr,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'total_byrdr' => $this->total_byrdr,
            'total_byrpr' => $this->total_byrpr,
            'total_byrdrpr' => $this->total_byrdrpr,
        ]);

        $query->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'nm_perawatan', $this->nm_perawatan])
            ->andFilterWhere(['like', 'kd_kategori', $this->kd_kategori])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'kd_poli', $this->kd_poli])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
