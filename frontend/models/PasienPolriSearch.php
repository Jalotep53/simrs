<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PasienPolri;

/**
 * PasienPolriSearch represents the model behind the search form of `frontend\models\PasienPolri`.
 */
class PasienPolriSearch extends PasienPolri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'safe'],
            [['golongan_polri', 'pangkat_polri', 'satuan_polri', 'jabatan_polri'], 'integer'],
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
        $query = PasienPolri::find();

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
            'golongan_polri' => $this->golongan_polri,
            'pangkat_polri' => $this->pangkat_polri,
            'satuan_polri' => $this->satuan_polri,
            'jabatan_polri' => $this->jabatan_polri,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis]);

        return $dataProvider;
    }
}
