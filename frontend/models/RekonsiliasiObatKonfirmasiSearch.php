<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RekonsiliasiObatKonfirmasi;

/**
 * RekonsiliasiObatKonfirmasiSearch represents the model behind the search form of `frontend\models\RekonsiliasiObatKonfirmasi`.
 */
class RekonsiliasiObatKonfirmasiSearch extends RekonsiliasiObatKonfirmasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekonsiliasi', 'diterima_farmasi', 'dikonfirmasi_apoteker', 'nip', 'diserahkan_pasien'], 'safe'],
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
        $query = RekonsiliasiObatKonfirmasi::find();

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
            'diterima_farmasi' => $this->diterima_farmasi,
            'dikonfirmasi_apoteker' => $this->dikonfirmasi_apoteker,
            'diserahkan_pasien' => $this->diserahkan_pasien,
        ]);

        $query->andFilterWhere(['like', 'no_rekonsiliasi', $this->no_rekonsiliasi])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
