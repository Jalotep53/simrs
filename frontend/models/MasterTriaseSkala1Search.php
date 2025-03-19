<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MasterTriaseSkala1;

/**
 * MasterTriaseSkala1Search represents the model behind the search form of `frontend\models\MasterTriaseSkala1`.
 */
class MasterTriaseSkala1Search extends MasterTriaseSkala1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala1', 'pengkajian_skala1'], 'safe'],
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
        $query = MasterTriaseSkala1::find();

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
        $query->andFilterWhere(['like', 'kode_pemeriksaan', $this->kode_pemeriksaan])
            ->andFilterWhere(['like', 'kode_skala1', $this->kode_skala1])
            ->andFilterWhere(['like', 'pengkajian_skala1', $this->pengkajian_skala1]);

        return $dataProvider;
    }
}
