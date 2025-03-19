<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdPenyerahanDarahDetail;

/**
 * UtdPenyerahanDarahDetailSearch represents the model behind the search form of `frontend\models\UtdPenyerahanDarahDetail`.
 */
class UtdPenyerahanDarahDetailSearch extends UtdPenyerahanDarahDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penyerahan', 'no_kantong'], 'safe'],
            [['jasa_sarana', 'paket_bhp', 'kso', 'manajemen', 'total'], 'number'],
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
        $query = UtdPenyerahanDarahDetail::find();

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
            'jasa_sarana' => $this->jasa_sarana,
            'paket_bhp' => $this->paket_bhp,
            'kso' => $this->kso,
            'manajemen' => $this->manajemen,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_penyerahan', $this->no_penyerahan])
            ->andFilterWhere(['like', 'no_kantong', $this->no_kantong]);

        return $dataProvider;
    }
}
