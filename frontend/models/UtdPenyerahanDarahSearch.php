<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UtdPenyerahanDarah;

/**
 * UtdPenyerahanDarahSearch represents the model behind the search form of `frontend\models\UtdPenyerahanDarah`.
 */
class UtdPenyerahanDarahSearch extends UtdPenyerahanDarah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penyerahan', 'tanggal', 'dinas', 'nip_cross', 'keterangan', 'status', 'kd_rek', 'pengambil_darah', 'alamat_pengambil_darah', 'nip_pj'], 'safe'],
            [['besarppn'], 'number'],
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
        $query = UtdPenyerahanDarah::find();

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
            'besarppn' => $this->besarppn,
        ]);

        $query->andFilterWhere(['like', 'no_penyerahan', $this->no_penyerahan])
            ->andFilterWhere(['like', 'dinas', $this->dinas])
            ->andFilterWhere(['like', 'nip_cross', $this->nip_cross])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'pengambil_darah', $this->pengambil_darah])
            ->andFilterWhere(['like', 'alamat_pengambil_darah', $this->alamat_pengambil_darah])
            ->andFilterWhere(['like', 'nip_pj', $this->nip_pj]);

        return $dataProvider;
    }
}
