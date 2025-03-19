<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratCutiHamil;

/**
 * SuratCutiHamilSearch represents the model behind the search form of `frontend\models\SuratCutiHamil`.
 */
class SuratCutiHamilSearch extends SuratCutiHamil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'keterangan_hamil', 'terhitung_mulai', 'perkiraan_lahir', 'no_surat'], 'safe'],
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
        $query = SuratCutiHamil::find();

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
            'terhitung_mulai' => $this->terhitung_mulai,
            'perkiraan_lahir' => $this->perkiraan_lahir,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'keterangan_hamil', $this->keterangan_hamil])
            ->andFilterWhere(['like', 'no_surat', $this->no_surat]);

        return $dataProvider;
    }
}
