<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SiranapKetersediaanKamar;

/**
 * SiranapKetersediaanKamarSearch represents the model behind the search form of `frontend\models\SiranapKetersediaanKamar`.
 */
class SiranapKetersediaanKamarSearch extends SiranapKetersediaanKamar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ruang_siranap', 'kelas_ruang_siranap', 'kd_bangsal', 'kelas'], 'safe'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'menunggu'], 'integer'],
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
        $query = SiranapKetersediaanKamar::find();

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
            'kapasitas' => $this->kapasitas,
            'tersedia' => $this->tersedia,
            'tersediapria' => $this->tersediapria,
            'tersediawanita' => $this->tersediawanita,
            'menunggu' => $this->menunggu,
        ]);

        $query->andFilterWhere(['like', 'kode_ruang_siranap', $this->kode_ruang_siranap])
            ->andFilterWhere(['like', 'kelas_ruang_siranap', $this->kelas_ruang_siranap])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'kelas', $this->kelas]);

        return $dataProvider;
    }
}
