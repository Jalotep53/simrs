<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditPembuanganBendaTajam;

/**
 * AuditPembuanganBendaTajamSearch represents the model behind the search form of `frontend\models\AuditPembuanganBendaTajam`.
 */
class AuditPembuanganBendaTajamSearch extends AuditPembuanganBendaTajam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'setiap_injeksi_needle_langsung_dimasukkan_safety_box', 'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box', 'setiap_benda_tajam_jarum_dimasukkan_safety_box', 'safety_box_tigaperempat_diganti', 'safety_box_keadaan_bersih', 'saftey_box_tertutup_setelah_digunakan'], 'safe'],
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
        $query = AuditPembuanganBendaTajam::find();

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

        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'setiap_injeksi_needle_langsung_dimasukkan_safety_box', $this->setiap_injeksi_needle_langsung_dimasukkan_safety_box])
            ->andFilterWhere(['like', 'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box', $this->setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box])
            ->andFilterWhere(['like', 'setiap_benda_tajam_jarum_dimasukkan_safety_box', $this->setiap_benda_tajam_jarum_dimasukkan_safety_box])
            ->andFilterWhere(['like', 'safety_box_tigaperempat_diganti', $this->safety_box_tigaperempat_diganti])
            ->andFilterWhere(['like', 'safety_box_keadaan_bersih', $this->safety_box_keadaan_bersih])
            ->andFilterWhere(['like', 'saftey_box_tertutup_setelah_digunakan', $this->saftey_box_tertutup_setelah_digunakan]);

        return $dataProvider;
    }
}
