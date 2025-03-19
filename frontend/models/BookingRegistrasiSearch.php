<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingRegistrasi;

/**
 * BookingRegistrasiSearch represents the model behind the search form of `frontend\models\BookingRegistrasi`.
 */
class BookingRegistrasiSearch extends BookingRegistrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_booking', 'jam_booking', 'no_rkm_medis', 'tanggal_periksa', 'kd_dokter', 'kd_poli', 'no_reg', 'kd_pj', 'waktu_kunjungan', 'status'], 'safe'],
            [['limit_reg'], 'integer'],
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
        $query = BookingRegistrasi::find();

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
            'tanggal_booking' => $this->tanggal_booking,
            'jam_booking' => $this->jam_booking,
            'tanggal_periksa' => $this->tanggal_periksa,
            'limit_reg' => $this->limit_reg,
            'waktu_kunjungan' => $this->waktu_kunjungan,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'kd_poli', $this->kd_poli])
            ->andFilterWhere(['like', 'no_reg', $this->no_reg])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
