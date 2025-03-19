<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CatatanObservasiRanapKebidanan;

/**
 * CatatanObservasiRanapKebidananSearch represents the model behind the search form of `frontend\models\CatatanObservasiRanapKebidanan`.
 */
class CatatanObservasiRanapKebidananSearch extends CatatanObservasiRanapKebidanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'gcs', 'td', 'hr', 'rr', 'suhu', 'spo2', 'kontraksi', 'bjj', 'ppv', 'vt', 'nip'], 'safe'],
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
        $query = CatatanObservasiRanapKebidanan::find();

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
            ->andFilterWhere(['like', 'gcs', $this->gcs])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'hr', $this->hr])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'spo2', $this->spo2])
            ->andFilterWhere(['like', 'kontraksi', $this->kontraksi])
            ->andFilterWhere(['like', 'bjj', $this->bjj])
            ->andFilterWhere(['like', 'ppv', $this->ppv])
            ->andFilterWhere(['like', 'vt', $this->vt])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
