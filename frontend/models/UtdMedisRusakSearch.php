<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdMedisRusak;

/**
 * UtdMedisRusakSearch represents the model behind the search form of `frontend\models\UtdMedisRusak`.
 */
class UtdMedisRusakSearch extends UtdMedisRusak
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_brng', 'nip', 'tanggal', 'keterangan'], 'safe'],
            [['jml', 'hargabeli', 'total'], 'number'],
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
        $query = UtdMedisRusak::find();

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
            'jml' => $this->jml,
            'hargabeli' => $this->hargabeli,
            'total' => $this->total,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
