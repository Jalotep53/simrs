<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JnsPerawatanUtd;

/**
 * JnsPerawatanUtdSearch represents the model behind the search form of `frontend\models\JnsPerawatanUtd`.
 */
class JnsPerawatanUtdSearch extends JnsPerawatanUtd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_jenis_prw', 'nm_perawatan', 'kd_pj', 'status'], 'safe'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'manajemen', 'total_byr'], 'number'],
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
        $query = JnsPerawatanUtd::find();

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
            'bagian_rs' => $this->bagian_rs,
            'bhp' => $this->bhp,
            'tarif_perujuk' => $this->tarif_perujuk,
            'tarif_tindakan_dokter' => $this->tarif_tindakan_dokter,
            'tarif_tindakan_petugas' => $this->tarif_tindakan_petugas,
            'kso' => $this->kso,
            'manajemen' => $this->manajemen,
            'total_byr' => $this->total_byr,
        ]);

        $query->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'nm_perawatan', $this->nm_perawatan])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
