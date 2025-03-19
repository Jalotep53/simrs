<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Dapuropname;

/**
 * DapuropnameSearch represents the model behind the search form of `frontend\models\Dapuropname`.
 */
class DapuropnameSearch extends Dapuropname
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'tanggal', 'keterangan'], 'safe'],
            [['h_beli', 'nomihilang', 'nomilebih'], 'number'],
            [['stok', 'real', 'selisih', 'lebih'], 'integer'],
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
        $query = Dapuropname::find();

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
            'tanggal' => $this->tanggal,
            'stok' => $this->stok,
            'real' => $this->real,
            'selisih' => $this->selisih,
            'nomihilang' => $this->nomihilang,
            'lebih' => $this->lebih,
            'nomilebih' => $this->nomilebih,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
