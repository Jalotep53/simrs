<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tampreturbeli;

/**
 * TampreturbeliSearch represents the model behind the search form of `frontend\models\Tampreturbeli`.
 */
class TampreturbeliSearch extends Tampreturbeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_faktur', 'kode_brng', 'nama_brng', 'satuan', 'no_batch', 'kadaluarsa', 'petugas'], 'safe'],
            [['h_beli', 'jml_beli', 'h_retur', 'jml_retur', 'total', 'jml_retur2'], 'number'],
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
        $query = Tampreturbeli::find();

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
            'h_beli' => $this->h_beli,
            'jml_beli' => $this->jml_beli,
            'h_retur' => $this->h_retur,
            'jml_retur' => $this->jml_retur,
            'total' => $this->total,
            'jml_retur2' => $this->jml_retur2,
        ]);

        $query->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nama_brng', $this->nama_brng])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'kadaluarsa', $this->kadaluarsa])
            ->andFilterWhere(['like', 'petugas', $this->petugas]);

        return $dataProvider;
    }
}
