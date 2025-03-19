<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HasilEndoskopiFaringLaring;

/**
 * HasilEndoskopiFaringLaringSearch represents the model behind the search form of `frontend\models\HasilEndoskopiFaringLaring`.
 */
class HasilEndoskopiFaringLaringSearch extends HasilEndoskopiFaringLaring
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'diagnosa_klinis', 'kiriman_dari', 'faring_uvula', 'faring_arkus_faring', 'faring_dinding_posterior', 'faring_tonsil', 'laring_tonsil_lingual', 'laring_valekula', 'laring_sinus_piriformis', 'laring_epiglotis', 'laring_arytenoid', 'laring_plika_ventrikularis', 'laring_pita_suara', 'laring_rima_vocalis', 'laring_lainlain', 'kesan', 'saran'], 'safe'],
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
        $query = HasilEndoskopiFaringLaring::find();

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
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'diagnosa_klinis', $this->diagnosa_klinis])
            ->andFilterWhere(['like', 'kiriman_dari', $this->kiriman_dari])
            ->andFilterWhere(['like', 'faring_uvula', $this->faring_uvula])
            ->andFilterWhere(['like', 'faring_arkus_faring', $this->faring_arkus_faring])
            ->andFilterWhere(['like', 'faring_dinding_posterior', $this->faring_dinding_posterior])
            ->andFilterWhere(['like', 'faring_tonsil', $this->faring_tonsil])
            ->andFilterWhere(['like', 'laring_tonsil_lingual', $this->laring_tonsil_lingual])
            ->andFilterWhere(['like', 'laring_valekula', $this->laring_valekula])
            ->andFilterWhere(['like', 'laring_sinus_piriformis', $this->laring_sinus_piriformis])
            ->andFilterWhere(['like', 'laring_epiglotis', $this->laring_epiglotis])
            ->andFilterWhere(['like', 'laring_arytenoid', $this->laring_arytenoid])
            ->andFilterWhere(['like', 'laring_plika_ventrikularis', $this->laring_plika_ventrikularis])
            ->andFilterWhere(['like', 'laring_pita_suara', $this->laring_pita_suara])
            ->andFilterWhere(['like', 'laring_rima_vocalis', $this->laring_rima_vocalis])
            ->andFilterWhere(['like', 'laring_lainlain', $this->laring_lainlain])
            ->andFilterWhere(['like', 'kesan', $this->kesan])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
}
