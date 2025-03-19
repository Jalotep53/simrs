<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SkriningRawatJalan;

/**
 * SkriningRawatJalanSearch represents the model behind the search form of `frontend\models\SkriningRawatJalan`.
 */
class SkriningRawatJalanSearch extends SkriningRawatJalan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rkm_medis', 'geriatri', 'kesadaran', 'pernapasan', 'nyeri_dada', 'skala_nyeri', 'keputusan', 'nip'], 'safe'],
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
        $query = SkriningRawatJalan::find();

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
            'jam' => $this->jam,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'geriatri', $this->geriatri])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'pernapasan', $this->pernapasan])
            ->andFilterWhere(['like', 'nyeri_dada', $this->nyeri_dada])
            ->andFilterWhere(['like', 'skala_nyeri', $this->skala_nyeri])
            ->andFilterWhere(['like', 'keputusan', $this->keputusan])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
