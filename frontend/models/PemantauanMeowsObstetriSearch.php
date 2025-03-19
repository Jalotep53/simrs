<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemantauanMeowsObstetri;

/**
 * PemantauanMeowsObstetriSearch represents the model behind the search form of `frontend\models\PemantauanMeowsObstetri`.
 */
class PemantauanMeowsObstetriSearch extends PemantauanMeowsObstetri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'parameter_pernapasan', 'skor_pernapasan', 'parameter_saturasi', 'skor_saturasi', 'parameter_temperatur', 'skor_temperatur', 'parameter_tekanan_darah_sistole', 'skor_tekanan_darah_sistole', 'parameter_tekanan_darah_diastole', 'skor_tekanan_darah_diastole', 'parameter_denyut_jantung', 'skor_denyut_jantung', 'parameter_kesadaran', 'skor_kesadaran', 'parameter_ketuban', 'skor_ketuban', 'parameter_discharge', 'skor_discharge', 'parameter_proteinuria', 'skor_proteinuria', 'skor_total', 'parameter_total', 'code_blue', 'nip'], 'safe'],
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
        $query = PemantauanMeowsObstetri::find();

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
            ->andFilterWhere(['like', 'parameter_pernapasan', $this->parameter_pernapasan])
            ->andFilterWhere(['like', 'skor_pernapasan', $this->skor_pernapasan])
            ->andFilterWhere(['like', 'parameter_saturasi', $this->parameter_saturasi])
            ->andFilterWhere(['like', 'skor_saturasi', $this->skor_saturasi])
            ->andFilterWhere(['like', 'parameter_temperatur', $this->parameter_temperatur])
            ->andFilterWhere(['like', 'skor_temperatur', $this->skor_temperatur])
            ->andFilterWhere(['like', 'parameter_tekanan_darah_sistole', $this->parameter_tekanan_darah_sistole])
            ->andFilterWhere(['like', 'skor_tekanan_darah_sistole', $this->skor_tekanan_darah_sistole])
            ->andFilterWhere(['like', 'parameter_tekanan_darah_diastole', $this->parameter_tekanan_darah_diastole])
            ->andFilterWhere(['like', 'skor_tekanan_darah_diastole', $this->skor_tekanan_darah_diastole])
            ->andFilterWhere(['like', 'parameter_denyut_jantung', $this->parameter_denyut_jantung])
            ->andFilterWhere(['like', 'skor_denyut_jantung', $this->skor_denyut_jantung])
            ->andFilterWhere(['like', 'parameter_kesadaran', $this->parameter_kesadaran])
            ->andFilterWhere(['like', 'skor_kesadaran', $this->skor_kesadaran])
            ->andFilterWhere(['like', 'parameter_ketuban', $this->parameter_ketuban])
            ->andFilterWhere(['like', 'skor_ketuban', $this->skor_ketuban])
            ->andFilterWhere(['like', 'parameter_discharge', $this->parameter_discharge])
            ->andFilterWhere(['like', 'skor_discharge', $this->skor_discharge])
            ->andFilterWhere(['like', 'parameter_proteinuria', $this->parameter_proteinuria])
            ->andFilterWhere(['like', 'skor_proteinuria', $this->skor_proteinuria])
            ->andFilterWhere(['like', 'skor_total', $this->skor_total])
            ->andFilterWhere(['like', 'parameter_total', $this->parameter_total])
            ->andFilterWhere(['like', 'code_blue', $this->code_blue])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
