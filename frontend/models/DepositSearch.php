<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Deposit;

/**
 * DepositSearch represents the model behind the search form of `frontend\models\Deposit`.
 */
class DepositSearch extends Deposit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_deposit', 'no_rawat', 'tgl_deposit', 'nama_bayar', 'nip', 'keterangan'], 'safe'],
            [['besarppn', 'besar_deposit'], 'number'],
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
        $query = Deposit::find();

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
            'tgl_deposit' => $this->tgl_deposit,
            'besarppn' => $this->besarppn,
            'besar_deposit' => $this->besar_deposit,
        ]);

        $query->andFilterWhere(['like', 'no_deposit', $this->no_deposit])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nama_bayar', $this->nama_bayar])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
