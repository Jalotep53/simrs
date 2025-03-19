<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PeriksaRadiologi;

/**
 * PeriksaRadiologiSearch represents the model behind the search form of `frontend\models\PeriksaRadiologi`.
 */
class PeriksaRadiologiSearch extends PeriksaRadiologi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nip', 'kd_jenis_prw', 'tgl_periksa', 'jam', 'dokter_perujuk', 'kd_dokter', 'status', 'proyeksi', 'kV', 'mAS', 'FFD', 'BSF', 'inak', 'jml_penyinaran', 'dosis'], 'safe'],
            [['bagian_rs', 'bhp', 'tarif_perujuk', 'tarif_tindakan_dokter', 'tarif_tindakan_petugas', 'kso', 'menejemen', 'biaya'], 'number'],
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
        $query = PeriksaRadiologi::find();

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
            'bagian_rs' => $this->bagian_rs,
            'bhp' => $this->bhp,
            'tarif_perujuk' => $this->tarif_perujuk,
            'tarif_tindakan_dokter' => $this->tarif_tindakan_dokter,
            'tarif_tindakan_petugas' => $this->tarif_tindakan_petugas,
            'kso' => $this->kso,
            'menejemen' => $this->menejemen,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'dokter_perujuk', $this->dokter_perujuk])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'proyeksi', $this->proyeksi])
            ->andFilterWhere(['like', 'kV', $this->kV])
            ->andFilterWhere(['like', 'mAS', $this->mAS])
            ->andFilterWhere(['like', 'FFD', $this->FFD])
            ->andFilterWhere(['like', 'BSF', $this->BSF])
            ->andFilterWhere(['like', 'inak', $this->inak])
            ->andFilterWhere(['like', 'jml_penyinaran', $this->jml_penyinaran])
            ->andFilterWhere(['like', 'dosis', $this->dosis]);

        return $dataProvider;
    }
}
