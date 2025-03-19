<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Hemodialisa;

/**
 * HemodialisaSearch represents the model behind the search form of `frontend\models\Hemodialisa`.
 */
class HemodialisaSearch extends Hemodialisa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'lama', 'akses', 'dialist', 'transfusi', 'penarikan', 'qb', 'qd', 'ureum', 'hb', 'hbsag', 'creatinin', 'hiv', 'hcv', 'lain', 'kd_penyakit'], 'safe'],
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
        $query = Hemodialisa::find();

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
            ->andFilterWhere(['like', 'lama', $this->lama])
            ->andFilterWhere(['like', 'akses', $this->akses])
            ->andFilterWhere(['like', 'dialist', $this->dialist])
            ->andFilterWhere(['like', 'transfusi', $this->transfusi])
            ->andFilterWhere(['like', 'penarikan', $this->penarikan])
            ->andFilterWhere(['like', 'qb', $this->qb])
            ->andFilterWhere(['like', 'qd', $this->qd])
            ->andFilterWhere(['like', 'ureum', $this->ureum])
            ->andFilterWhere(['like', 'hb', $this->hb])
            ->andFilterWhere(['like', 'hbsag', $this->hbsag])
            ->andFilterWhere(['like', 'creatinin', $this->creatinin])
            ->andFilterWhere(['like', 'hiv', $this->hiv])
            ->andFilterWhere(['like', 'hcv', $this->hcv])
            ->andFilterWhere(['like', 'lain', $this->lain])
            ->andFilterWhere(['like', 'kd_penyakit', $this->kd_penyakit]);

        return $dataProvider;
    }
}
