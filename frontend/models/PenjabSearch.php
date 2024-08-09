<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Penjab;

/**
 * PenjabSearch represents the model behind the search form of `frontend\models\Penjab`.
 */
class PenjabSearch extends Penjab
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_pj', 'png_jawab', 'nama_perusahaan', 'alamat_asuransi', 'no_telp', 'attn', 'status'], 'safe'],
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
        $query = Penjab::find();

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
        $query->andFilterWhere(['like', 'kd_pj', $this->kd_pj])
            ->andFilterWhere(['like', 'png_jawab', $this->png_jawab])
            ->andFilterWhere(['like', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['like', 'alamat_asuransi', $this->alamat_asuransi])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'attn', $this->attn])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
