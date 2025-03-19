<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\FollowUpDbd;

/**
 * FollowUpDbdSearch represents the model behind the search form of `frontend\models\FollowUpDbd`.
 */
class FollowUpDbdSearch extends FollowUpDbd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'hemoglobin', 'hematokrit', 'leokosit', 'trombosit', 'terapi_cairan', 'nip'], 'safe'],
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
        $query = FollowUpDbd::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam_rawat' => $this->jam_rawat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'hemoglobin', $this->hemoglobin])
            ->andFilterWhere(['like', 'hematokrit', $this->hematokrit])
            ->andFilterWhere(['like', 'leokosit', $this->leokosit])
            ->andFilterWhere(['like', 'trombosit', $this->trombosit])
            ->andFilterWhere(['like', 'terapi_cairan', $this->terapi_cairan])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
