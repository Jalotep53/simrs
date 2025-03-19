<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AsuhanGizi;

/**
 * AsuhanGiziSearch represents the model behind the search form of `frontend\models\AsuhanGizi`.
 */
class AsuhanGiziSearch extends AsuhanGizi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'antropometri_bb', 'antropometri_tb', 'antropometri_imt', 'antropometri_lla', 'antropometri_tl', 'antropometri_ulna', 'antropometri_bbideal', 'antropometri_bbperu', 'antropometri_tbperu', 'antropometri_bbpertb', 'antropometri_llaperu', 'biokimia', 'fisik_klinis', 'alergi_telur', 'alergi_susu_sapi', 'alergi_kacang', 'alergi_gluten', 'alergi_udang', 'alergi_ikan', 'alergi_hazelnut', 'pola_makan', 'riwayat_personal', 'diagnosis', 'intervensi_gizi', 'monitoring_evaluasi', 'nip'], 'safe'],
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
        $query = AsuhanGizi::find();

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

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'antropometri_bb', $this->antropometri_bb])
            ->andFilterWhere(['like', 'antropometri_tb', $this->antropometri_tb])
            ->andFilterWhere(['like', 'antropometri_imt', $this->antropometri_imt])
            ->andFilterWhere(['like', 'antropometri_lla', $this->antropometri_lla])
            ->andFilterWhere(['like', 'antropometri_tl', $this->antropometri_tl])
            ->andFilterWhere(['like', 'antropometri_ulna', $this->antropometri_ulna])
            ->andFilterWhere(['like', 'antropometri_bbideal', $this->antropometri_bbideal])
            ->andFilterWhere(['like', 'antropometri_bbperu', $this->antropometri_bbperu])
            ->andFilterWhere(['like', 'antropometri_tbperu', $this->antropometri_tbperu])
            ->andFilterWhere(['like', 'antropometri_bbpertb', $this->antropometri_bbpertb])
            ->andFilterWhere(['like', 'antropometri_llaperu', $this->antropometri_llaperu])
            ->andFilterWhere(['like', 'biokimia', $this->biokimia])
            ->andFilterWhere(['like', 'fisik_klinis', $this->fisik_klinis])
            ->andFilterWhere(['like', 'alergi_telur', $this->alergi_telur])
            ->andFilterWhere(['like', 'alergi_susu_sapi', $this->alergi_susu_sapi])
            ->andFilterWhere(['like', 'alergi_kacang', $this->alergi_kacang])
            ->andFilterWhere(['like', 'alergi_gluten', $this->alergi_gluten])
            ->andFilterWhere(['like', 'alergi_udang', $this->alergi_udang])
            ->andFilterWhere(['like', 'alergi_ikan', $this->alergi_ikan])
            ->andFilterWhere(['like', 'alergi_hazelnut', $this->alergi_hazelnut])
            ->andFilterWhere(['like', 'pola_makan', $this->pola_makan])
            ->andFilterWhere(['like', 'riwayat_personal', $this->riwayat_personal])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'intervensi_gizi', $this->intervensi_gizi])
            ->andFilterWhere(['like', 'monitoring_evaluasi', $this->monitoring_evaluasi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
