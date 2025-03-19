<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MasterTriaseSkala2;

/**
 * MasterTriaseSkala2Search represents the model behind the search form of `frontend\models\MasterTriaseSkala2`.
 */
class MasterTriaseSkala2Search extends MasterTriaseSkala2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemeriksaan', 'kode_skala2', 'pengkajian_skala2'], 'safe'],
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
        $query = MasterTriaseSkala2::find();

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
            ->andFilterWhere(['like', 'kode_skala2', $this->kode_skala2])
            ->andFilterWhere(['like', 'pengkajian_skala2', $this->pengkajian_skala2]);

        return $dataProvider;
    }
}
