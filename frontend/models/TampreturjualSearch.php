<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tampreturjual;

/**
 * TampreturjualSearch represents the model behind the search form of `frontend\models\Tampreturjual`.
 */
class TampreturjualSearch extends Tampreturjual
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_jual', 'kode_brng', 'nama_brng', 'satuan', 'no_batch', 'petugas', 'no_faktur'], 'safe'],
            [['jml_jual', 'h_jual', 'jml_retur', 'h_retur', 'subtotal'], 'number'],
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
        $query = Tampreturjual::find();

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
            'jml_jual' => $this->jml_jual,
            'h_jual' => $this->h_jual,
            'jml_retur' => $this->jml_retur,
            'h_retur' => $this->h_retur,
            'subtotal' => $this->subtotal,
        ]);

        $query->andFilterWhere(['like', 'nota_jual', $this->nota_jual])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nama_brng', $this->nama_brng])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'petugas', $this->petugas])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur]);

        return $dataProvider;
    }
}
