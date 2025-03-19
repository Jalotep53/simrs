<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdDetailPemisahanKomponen;

/**
 * UtdDetailPemisahanKomponenSearch represents the model behind the search form of `frontend\models\UtdDetailPemisahanKomponen`.
 */
class UtdDetailPemisahanKomponenSearch extends UtdDetailPemisahanKomponen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_donor', 'no_kantong', 'kode_komponen', 'tanggal_kadaluarsa'], 'safe'],
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
        $query = UtdDetailPemisahanKomponen::find();

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
            'tanggal_kadaluarsa' => $this->tanggal_kadaluarsa,
        ]);

        $query->andFilterWhere(['like', 'no_donor', $this->no_donor])
            ->andFilterWhere(['like', 'no_kantong', $this->no_kantong])
            ->andFilterWhere(['like', 'kode_komponen', $this->kode_komponen]);

        return $dataProvider;
    }
}
