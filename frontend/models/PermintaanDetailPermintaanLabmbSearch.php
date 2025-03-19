<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PermintaanDetailPermintaanLabmb;

/**
 * PermintaanDetailPermintaanLabmbSearch represents the model behind the search form of `frontend\models\PermintaanDetailPermintaanLabmb`.
 */
class PermintaanDetailPermintaanLabmbSearch extends PermintaanDetailPermintaanLabmb
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noorder', 'kd_jenis_prw', 'stts_bayar'], 'safe'],
            [['id_template'], 'integer'],
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
        $query = PermintaanDetailPermintaanLabmb::find();

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
            'id_template' => $this->id_template,
        ]);

        $query->andFilterWhere(['like', 'noorder', $this->noorder])
            ->andFilterWhere(['like', 'kd_jenis_prw', $this->kd_jenis_prw])
            ->andFilterWhere(['like', 'stts_bayar', $this->stts_bayar]);

        return $dataProvider;
    }
}
