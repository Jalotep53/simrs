<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetailPiutangPasien;

/**
 * DetailPiutangPasienSearch represents the model behind the search form of `frontend\models\DetailPiutangPasien`.
 */
class DetailPiutangPasienSearch extends DetailPiutangPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'nama_bayar', 'kd_pj', 'tgltempo'], 'safe'],
            [['totalpiutang', 'sisapiutang'], 'number'],
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
        $query = DetailPiutangPasien::find();

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
            'totalpiutang' => $this->totalpiutang,
            'sisapiutang' => $this->sisapiutang,
            'tgltempo' => $this->tgltempo,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'kd_pj', $this->kd_pj]);

        return $dataProvider;
    }
}
