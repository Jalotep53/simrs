<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CatatanKeseimbanganCairan;

/**
 * CatatanKeseimbanganCairanSearch represents the model behind the search form of `frontend\models\CatatanKeseimbanganCairan`.
 */
class CatatanKeseimbanganCairanSearch extends CatatanKeseimbanganCairan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'infus', 'tranfusi', 'minum', 'urine', 'drain', 'ngt', 'iwl', 'keseimbangan', 'keterangan', 'nip'], 'safe'],
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
        $query = CatatanKeseimbanganCairan::find();

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
            'tgl_perawatan' => $this->tgl_perawatan,
            'jam_rawat' => $this->jam_rawat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'infus', $this->infus])
            ->andFilterWhere(['like', 'tranfusi', $this->tranfusi])
            ->andFilterWhere(['like', 'minum', $this->minum])
            ->andFilterWhere(['like', 'urine', $this->urine])
            ->andFilterWhere(['like', 'drain', $this->drain])
            ->andFilterWhere(['like', 'ngt', $this->ngt])
            ->andFilterWhere(['like', 'iwl', $this->iwl])
            ->andFilterWhere(['like', 'keseimbangan', $this->keseimbangan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
