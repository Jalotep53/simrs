<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PasienTni;

/**
 * PasienTniSearch represents the model behind the search form of `frontend\models\PasienTni`.
 */
class PasienTniSearch extends PasienTni
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis'], 'safe'],
            [['golongan_tni', 'pangkat_tni', 'satuan_tni', 'jabatan_tni'], 'integer'],
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
        $query = PasienTni::find();

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
            'golongan_tni' => $this->golongan_tni,
            'pangkat_tni' => $this->pangkat_tni,
            'satuan_tni' => $this->satuan_tni,
            'jabatan_tni' => $this->jabatan_tni,
        ]);

        $query->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis]);

        return $dataProvider;
    }
}
