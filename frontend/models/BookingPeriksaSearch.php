<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingPeriksa;

/**
 * BookingPeriksaSearch represents the model behind the search form of `frontend\models\BookingPeriksa`.
 */
class BookingPeriksaSearch extends BookingPeriksa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_booking', 'tanggal', 'nama', 'alamat', 'no_telp', 'email', 'kd_poli', 'tambahan_pesan', 'status', 'tanggal_booking'], 'safe'],
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
        $query = BookingPeriksa::find();

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
            'tanggal_booking' => $this->tanggal_booking,
        ]);

        $query->andFilterWhere(['like', 'no_booking', $this->no_booking])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'kd_poli', $this->kd_poli])
            ->andFilterWhere(['like', 'tambahan_pesan', $this->tambahan_pesan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
