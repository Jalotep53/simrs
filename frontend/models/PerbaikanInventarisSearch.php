<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerbaikanInventaris;

/**
 * PerbaikanInventarisSearch represents the model behind the search form of `frontend\models\PerbaikanInventaris`.
 */
class PerbaikanInventarisSearch extends PerbaikanInventaris
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'tanggal', 'uraian_kegiatan', 'nip', 'pelaksana', 'keterangan', 'status'], 'safe'],
            [['biaya'], 'number'],
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
        $query = PerbaikanInventaris::find();

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
            'tanggal' => $this->tanggal,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'no_permintaan', $this->no_permintaan])
            ->andFilterWhere(['like', 'uraian_kegiatan', $this->uraian_kegiatan])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'pelaksana', $this->pelaksana])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
