<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AplicareKetersediaanKamar;

/**
 * AplicareKetersediaanKamarSearch represents the model behind the search form of `frontend\models\AplicareKetersediaanKamar`.
 */
class AplicareKetersediaanKamarSearch extends AplicareKetersediaanKamar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_kelas_aplicare', 'kd_bangsal', 'kelas'], 'safe'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'tersediapriawanita'], 'integer'],
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
        $query = AplicareKetersediaanKamar::find();

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
            'tersediapriawanita' => $this->tersediapriawanita,
        ]);

        $query->andFilterWhere(['like', 'kode_kelas_aplicare', $this->kode_kelas_aplicare])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'kelas', $this->kelas]);

        return $dataProvider;
    }
}
