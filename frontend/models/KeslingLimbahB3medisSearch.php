<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\KeslingLimbahB3medis;

/**
 * KeslingLimbahB3medisSearch represents the model behind the search form of `frontend\models\KeslingLimbahB3medis`.
 */
class KeslingLimbahB3medisSearch extends KeslingLimbahB3medis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal', 'tujuan_penyerahan', 'bukti_dokumen', 'keterangan'], 'safe'],
            [['jmllimbah', 'sisa_di_tps'], 'number'],
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
        $query = KeslingLimbahB3medis::find();

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
            'jmllimbah' => $this->jmllimbah,
            'sisa_di_tps' => $this->sisa_di_tps,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'tujuan_penyerahan', $this->tujuan_penyerahan])
            ->andFilterWhere(['like', 'bukti_dokumen', $this->bukti_dokumen])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
