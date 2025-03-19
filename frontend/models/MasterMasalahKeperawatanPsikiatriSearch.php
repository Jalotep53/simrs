<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MasterMasalahKeperawatanPsikiatri;

/**
 * MasterMasalahKeperawatanPsikiatriSearch represents the model behind the search form of `frontend\models\MasterMasalahKeperawatanPsikiatri`.
 */
class MasterMasalahKeperawatanPsikiatriSearch extends MasterMasalahKeperawatanPsikiatri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_masalah', 'nama_masalah'], 'safe'],
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
        $query = MasterMasalahKeperawatanPsikiatri::find();

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
        $query->andFilterWhere(['like', 'kode_masalah', $this->kode_masalah])
            ->andFilterWhere(['like', 'nama_masalah', $this->nama_masalah]);

        return $dataProvider;
    }
}
