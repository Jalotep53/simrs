<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiwayatPenelitian;

/**
 * RiwayatPenelitianSearch represents the model behind the search form of `frontend\models\RiwayatPenelitian`.
 */
class RiwayatPenelitianSearch extends RiwayatPenelitian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['jenis_penelitian', 'peranan', 'judul_penelitian', 'judul_jurnal', 'tahun', 'asal_dana', 'berkas'], 'safe'],
            [['biaya_penelitian'], 'number'],
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
        $query = RiwayatPenelitian::find();

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
            'id' => $this->id,
            'tahun' => $this->tahun,
            'biaya_penelitian' => $this->biaya_penelitian,
        ]);

        $query->andFilterWhere(['like', 'jenis_penelitian', $this->jenis_penelitian])
            ->andFilterWhere(['like', 'peranan', $this->peranan])
            ->andFilterWhere(['like', 'judul_penelitian', $this->judul_penelitian])
            ->andFilterWhere(['like', 'judul_jurnal', $this->judul_jurnal])
            ->andFilterWhere(['like', 'asal_dana', $this->asal_dana])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $dataProvider;
    }
}
