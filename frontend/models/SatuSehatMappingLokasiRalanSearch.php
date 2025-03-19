<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SatuSehatMappingLokasiRalan;

/**
 * SatuSehatMappingLokasiRalanSearch represents the model behind the search form of `frontend\models\SatuSehatMappingLokasiRalan`.
 */
class SatuSehatMappingLokasiRalanSearch extends SatuSehatMappingLokasiRalan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_poli', 'id_organisasi_satusehat', 'id_lokasi_satusehat', 'longitude', 'latitude', 'altittude'], 'safe'],
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
        $query = SatuSehatMappingLokasiRalan::find();

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
        $query->andFilterWhere(['like', 'kd_poli', $this->kd_poli])
            ->andFilterWhere(['like', 'id_organisasi_satusehat', $this->id_organisasi_satusehat])
            ->andFilterWhere(['like', 'id_lokasi_satusehat', $this->id_lokasi_satusehat])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'altittude', $this->altittude]);

        return $dataProvider;
    }
}
