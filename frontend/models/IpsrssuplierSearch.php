<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ipsrssuplier;

/**
 * IpsrssuplierSearch represents the model behind the search form of `frontend\models\Ipsrssuplier`.
 */
class IpsrssuplierSearch extends Ipsrssuplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_suplier', 'nama_suplier', 'alamat', 'kota', 'no_telp', 'nama_bank', 'rekening'], 'safe'],
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
        $query = Ipsrssuplier::find();

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
        $query->andFilterWhere(['like', 'kode_suplier', $this->kode_suplier])
            ->andFilterWhere(['like', 'nama_suplier', $this->nama_suplier])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'nama_bank', $this->nama_bank])
            ->andFilterWhere(['like', 'rekening', $this->rekening]);

        return $dataProvider;
    }
}
