<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jurnal;

/**
 * JurnalSearch represents the model behind the search form of `frontend\models\Jurnal`.
 */
class JurnalSearch extends Jurnal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_jurnal', 'no_bukti', 'tgl_jurnal', 'jam_jurnal', 'jenis', 'keterangan'], 'safe'],
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
        $query = Jurnal::find();

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
            'tgl_jurnal' => $this->tgl_jurnal,
            'jam_jurnal' => $this->jam_jurnal,
        ]);

        $query->andFilterWhere(['like', 'no_jurnal', $this->no_jurnal])
            ->andFilterWhere(['like', 'no_bukti', $this->no_bukti])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
