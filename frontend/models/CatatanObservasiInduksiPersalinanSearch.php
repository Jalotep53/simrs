<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CatatanObservasiInduksiPersalinan;

/**
 * CatatanObservasiInduksiPersalinanSearch represents the model behind the search form of `frontend\models\CatatanObservasiInduksiPersalinan`.
 */
class CatatanObservasiInduksiPersalinanSearch extends CatatanObservasiInduksiPersalinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'obat', 'cairan', 'dosis', 'his', 'djj', 'keterangan', 'nip'], 'safe'],
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
        $query = CatatanObservasiInduksiPersalinan::find();

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
            ->andFilterWhere(['like', 'obat', $this->obat])
            ->andFilterWhere(['like', 'cairan', $this->cairan])
            ->andFilterWhere(['like', 'dosis', $this->dosis])
            ->andFilterWhere(['like', 'his', $this->his])
            ->andFilterWhere(['like', 'djj', $this->djj])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
