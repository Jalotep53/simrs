<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DeteksiDiniCorona;

/**
 * DeteksiDiniCoronaSearch represents the model behind the search form of `frontend\models\DeteksiDiniCorona`.
 */
class DeteksiDiniCoronaSearch extends DeteksiDiniCorona
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'gejala_demam', 'gejala_batuk', 'gejala_sesak', 'gejala_tanggal_pertama', 'gejala_riwayat_sakit', 'gejala_riwayat_periksa', 'faktor_riwayat_perjalanan', 'faktor_asal_daerah', 'faktor_tanggal_kedatangan', 'faktor_paparan_kontakpositif', 'faktor_paparan_kontakpdp', 'faktor_paparan_faskespositif', 'faktor_paparan_perjalananln', 'faktor_paparan_pasarhewan', 'kesimpulan', 'tindak_lanjut'], 'safe'],
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
        $query = DeteksiDiniCorona::find();

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
            'gejala_tanggal_pertama' => $this->gejala_tanggal_pertama,
            'faktor_tanggal_kedatangan' => $this->faktor_tanggal_kedatangan,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'gejala_demam', $this->gejala_demam])
            ->andFilterWhere(['like', 'gejala_batuk', $this->gejala_batuk])
            ->andFilterWhere(['like', 'gejala_sesak', $this->gejala_sesak])
            ->andFilterWhere(['like', 'gejala_riwayat_sakit', $this->gejala_riwayat_sakit])
            ->andFilterWhere(['like', 'gejala_riwayat_periksa', $this->gejala_riwayat_periksa])
            ->andFilterWhere(['like', 'faktor_riwayat_perjalanan', $this->faktor_riwayat_perjalanan])
            ->andFilterWhere(['like', 'faktor_asal_daerah', $this->faktor_asal_daerah])
            ->andFilterWhere(['like', 'faktor_paparan_kontakpositif', $this->faktor_paparan_kontakpositif])
            ->andFilterWhere(['like', 'faktor_paparan_kontakpdp', $this->faktor_paparan_kontakpdp])
            ->andFilterWhere(['like', 'faktor_paparan_faskespositif', $this->faktor_paparan_faskespositif])
            ->andFilterWhere(['like', 'faktor_paparan_perjalananln', $this->faktor_paparan_perjalananln])
            ->andFilterWhere(['like', 'faktor_paparan_pasarhewan', $this->faktor_paparan_pasarhewan])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'tindak_lanjut', $this->tindak_lanjut]);

        return $dataProvider;
    }
}
