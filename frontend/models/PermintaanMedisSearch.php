<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PermintaanMedis;

/**
 * PermintaanMedisSearch represents the model behind the search form of `frontend\models\PermintaanMedis`.
 */
class PermintaanMedisSearch extends PermintaanMedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'kd_bangsal', 'nip', 'tanggal', 'status', 'kd_bangsaltujuan'], 'safe'],
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
        $query = PermintaanMedis::find();

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

        $query->andFilterWhere(['like', 'no_permintaan', $this->no_permintaan])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kd_bangsaltujuan', $this->kd_bangsaltujuan]);

        return $dataProvider;
    }
}
