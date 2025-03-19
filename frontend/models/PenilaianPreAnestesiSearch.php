<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPreAnestesi;

/**
 * PenilaianPreAnestesiSearch represents the model behind the search form of `frontend\models\PenilaianPreAnestesi`.
 */
class PenilaianPreAnestesiSearch extends PenilaianPreAnestesi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'tanggal_operasi', 'diagnosa', 'rencana_tindakan', 'tb', 'bb', 'td', 'io2', 'nadi', 'pernapasan', 'suhu', 'fisik_cardiovasculer', 'fisik_paru', 'fisik_abdomen', 'fisik_extrimitas', 'fisik_endokrin', 'fisik_ginjal', 'fisik_obatobatan', 'fisik_laborat', 'fisik_penunjang', 'riwayat_penyakit_alergiobat', 'riwayat_penyakit_alergilainnya', 'riwayat_penyakit_terapi', 'riwayat_kebiasaan_merokok', 'riwayat_kebiasaan_ket_merokok', 'riwayat_kebiasaan_alkohol', 'riwayat_kebiasaan_ket_alkohol', 'riwayat_kebiasaan_obat', 'riwayat_kebiasaan_ket_obat', 'riwayat_medis_cardiovasculer', 'riwayat_medis_respiratory', 'riwayat_medis_endocrine', 'riwayat_medis_lainnya', 'asa', 'puasa', 'rencana_anestesi', 'rencana_perawatan', 'catatan_khusus'], 'safe'],
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
        $query = PenilaianPreAnestesi::find();

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
            'tanggal_operasi' => $this->tanggal_operasi,
            'puasa' => $this->puasa,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'rencana_tindakan', $this->rencana_tindakan])
            ->andFilterWhere(['like', 'tb', $this->tb])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'io2', $this->io2])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'pernapasan', $this->pernapasan])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'fisik_cardiovasculer', $this->fisik_cardiovasculer])
            ->andFilterWhere(['like', 'fisik_paru', $this->fisik_paru])
            ->andFilterWhere(['like', 'fisik_abdomen', $this->fisik_abdomen])
            ->andFilterWhere(['like', 'fisik_extrimitas', $this->fisik_extrimitas])
            ->andFilterWhere(['like', 'fisik_endokrin', $this->fisik_endokrin])
            ->andFilterWhere(['like', 'fisik_ginjal', $this->fisik_ginjal])
            ->andFilterWhere(['like', 'fisik_obatobatan', $this->fisik_obatobatan])
            ->andFilterWhere(['like', 'fisik_laborat', $this->fisik_laborat])
            ->andFilterWhere(['like', 'fisik_penunjang', $this->fisik_penunjang])
            ->andFilterWhere(['like', 'riwayat_penyakit_alergiobat', $this->riwayat_penyakit_alergiobat])
            ->andFilterWhere(['like', 'riwayat_penyakit_alergilainnya', $this->riwayat_penyakit_alergilainnya])
            ->andFilterWhere(['like', 'riwayat_penyakit_terapi', $this->riwayat_penyakit_terapi])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_merokok', $this->riwayat_kebiasaan_merokok])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_ket_merokok', $this->riwayat_kebiasaan_ket_merokok])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_alkohol', $this->riwayat_kebiasaan_alkohol])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_ket_alkohol', $this->riwayat_kebiasaan_ket_alkohol])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_obat', $this->riwayat_kebiasaan_obat])
            ->andFilterWhere(['like', 'riwayat_kebiasaan_ket_obat', $this->riwayat_kebiasaan_ket_obat])
            ->andFilterWhere(['like', 'riwayat_medis_cardiovasculer', $this->riwayat_medis_cardiovasculer])
            ->andFilterWhere(['like', 'riwayat_medis_respiratory', $this->riwayat_medis_respiratory])
            ->andFilterWhere(['like', 'riwayat_medis_endocrine', $this->riwayat_medis_endocrine])
            ->andFilterWhere(['like', 'riwayat_medis_lainnya', $this->riwayat_medis_lainnya])
            ->andFilterWhere(['like', 'asa', $this->asa])
            ->andFilterWhere(['like', 'rencana_anestesi', $this->rencana_anestesi])
            ->andFilterWhere(['like', 'rencana_perawatan', $this->rencana_perawatan])
            ->andFilterWhere(['like', 'catatan_khusus', $this->catatan_khusus]);

        return $dataProvider;
    }
}
