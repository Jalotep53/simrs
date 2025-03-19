<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditBundleIsk;

/**
 * AuditBundleIskSearch represents the model behind the search form of `frontend\models\AuditBundleIsk`.
 */
class AuditBundleIskSearch extends AuditBundleIsk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'pemasangan_sesuai_indikasi', 'hand_hygiene', 'menggunakan_apd_yang_tepat', 'pemasangan_menggunakan_alat_steril', 'segera_dilepas_setelah_tidak_diperlukan', 'pengisian_balon_sesuai_petunjuk', 'fiksasi_kateter_dengan_plester', 'urinebag_menggantung_tidak_menyentuh_lantai'], 'safe'],
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
        $query = AuditBundleIsk::find();

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
            ->andFilterWhere(['like', 'pemasangan_sesuai_indikasi', $this->pemasangan_sesuai_indikasi])
            ->andFilterWhere(['like', 'hand_hygiene', $this->hand_hygiene])
            ->andFilterWhere(['like', 'menggunakan_apd_yang_tepat', $this->menggunakan_apd_yang_tepat])
            ->andFilterWhere(['like', 'pemasangan_menggunakan_alat_steril', $this->pemasangan_menggunakan_alat_steril])
            ->andFilterWhere(['like', 'segera_dilepas_setelah_tidak_diperlukan', $this->segera_dilepas_setelah_tidak_diperlukan])
            ->andFilterWhere(['like', 'pengisian_balon_sesuai_petunjuk', $this->pengisian_balon_sesuai_petunjuk])
            ->andFilterWhere(['like', 'fiksasi_kateter_dengan_plester', $this->fiksasi_kateter_dengan_plester])
            ->andFilterWhere(['like', 'urinebag_menggantung_tidak_menyentuh_lantai', $this->urinebag_menggantung_tidak_menyentuh_lantai]);

        return $dataProvider;
    }
}
