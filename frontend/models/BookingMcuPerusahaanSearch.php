<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BookingMcuPerusahaan;

/**
 * BookingMcuPerusahaanSearch represents the model behind the search form of `frontend\models\BookingMcuPerusahaan`.
 */
class BookingMcuPerusahaanSearch extends BookingMcuPerusahaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_booking', 'jam_booking', 'no_rkm_medis', 'tanggal_mcu', 'no_mcu', 'status', 'kode_perusahaan'], 'safe'],
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
        $query = BookingMcuPerusahaan::find();

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
            'tanggal_mcu' => $this->tanggal_mcu,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'no_mcu', $this->no_mcu])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kode_perusahaan', $this->kode_perusahaan]);

        return $dataProvider;
    }
}
