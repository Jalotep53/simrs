<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingLokasiRuanglabmb;

/**
 * SatuSehatMappingLokasiRuanglabmbSearch represents the model behind the search form of `frontend\models\SatuSehatMappingLokasiRuanglabmb`.
 */
class SatuSehatMappingLokasiRuanglabmbSearch extends SatuSehatMappingLokasiRuanglabmb
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_organisasi_satusehat', 'id_lokasi_satusehat', 'longitude', 'latitude', 'altittude'], 'safe'],
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
        $query = SatuSehatMappingLokasiRuanglabmb::find();

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
        $query->andFilterWhere(['like', 'id_organisasi_satusehat', $this->id_organisasi_satusehat])
            ->andFilterWhere(['like', 'id_lokasi_satusehat', $this->id_lokasi_satusehat])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'altittude', $this->altittude]);

        return $dataProvider;
    }
}
