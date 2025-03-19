<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemantauanPewsDewasa;

/**
 * PemantauanPewsDewasaSearch represents the model behind the search form of `frontend\models\PemantauanPewsDewasa`.
 */
class PemantauanPewsDewasaSearch extends PemantauanPewsDewasa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'parameter_laju_respirasi', 'skor_laju_respirasi', 'parameter_saturasi_oksigen', 'skor_saturasi_oksigen', 'parameter_suplemen_oksigen', 'skor_suplemen_oksigen', 'parameter_tekanan_darah_sistolik', 'skor_tekanan_darah_sistolik', 'parameter_laju_jantung', 'skor_laju_jantung', 'parameter_kesadaran', 'skor_kesadaran', 'parameter_temperatur', 'skor_temperatur', 'skor_total', 'parameter_total', 'nip'], 'safe'],
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
        $query = PemantauanPewsDewasa::find();

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
            ->andFilterWhere(['like', 'parameter_laju_respirasi', $this->parameter_laju_respirasi])
            ->andFilterWhere(['like', 'skor_laju_respirasi', $this->skor_laju_respirasi])
            ->andFilterWhere(['like', 'parameter_saturasi_oksigen', $this->parameter_saturasi_oksigen])
            ->andFilterWhere(['like', 'skor_saturasi_oksigen', $this->skor_saturasi_oksigen])
            ->andFilterWhere(['like', 'parameter_suplemen_oksigen', $this->parameter_suplemen_oksigen])
            ->andFilterWhere(['like', 'skor_suplemen_oksigen', $this->skor_suplemen_oksigen])
            ->andFilterWhere(['like', 'parameter_tekanan_darah_sistolik', $this->parameter_tekanan_darah_sistolik])
            ->andFilterWhere(['like', 'skor_tekanan_darah_sistolik', $this->skor_tekanan_darah_sistolik])
            ->andFilterWhere(['like', 'parameter_laju_jantung', $this->parameter_laju_jantung])
            ->andFilterWhere(['like', 'skor_laju_jantung', $this->skor_laju_jantung])
            ->andFilterWhere(['like', 'parameter_kesadaran', $this->parameter_kesadaran])
            ->andFilterWhere(['like', 'skor_kesadaran', $this->skor_kesadaran])
            ->andFilterWhere(['like', 'parameter_temperatur', $this->parameter_temperatur])
            ->andFilterWhere(['like', 'skor_temperatur', $this->skor_temperatur])
            ->andFilterWhere(['like', 'skor_total', $this->skor_total])
            ->andFilterWhere(['like', 'parameter_total', $this->parameter_total])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
