<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tokoreturbeli;

/**
 * TokoreturbeliSearch represents the model behind the search form of `frontend\models\Tokoreturbeli`.
 */
class TokoreturbeliSearch extends Tokoreturbeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur_beli', 'tgl_retur', 'nip', 'kode_suplier', 'catatan'], 'safe'],
            [['total'], 'number'],
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
        $query = Tokoreturbeli::find();

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
            'tgl_retur' => $this->tgl_retur,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'no_retur_beli', $this->no_retur_beli])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'kode_suplier', $this->kode_suplier])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
