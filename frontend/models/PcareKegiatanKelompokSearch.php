<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PcareKegiatanKelompok;

/**
 * PcareKegiatanKelompokSearch represents the model behind the search form of `frontend\models\PcareKegiatanKelompok`.
 */
class PcareKegiatanKelompokSearch extends PcareKegiatanKelompok
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eduId', 'clubId', 'namaClub', 'tglPelayanan', 'nmKegiatan', 'nmKelompok', 'materi', 'pembicara', 'lokasi', 'keterangan'], 'safe'],
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
        $query = PcareKegiatanKelompok::find();

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
            'tglPelayanan' => $this->tglPelayanan,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'eduId', $this->eduId])
            ->andFilterWhere(['like', 'clubId', $this->clubId])
            ->andFilterWhere(['like', 'namaClub', $this->namaClub])
            ->andFilterWhere(['like', 'nmKegiatan', $this->nmKegiatan])
            ->andFilterWhere(['like', 'nmKelompok', $this->nmKelompok])
            ->andFilterWhere(['like', 'materi', $this->materi])
            ->andFilterWhere(['like', 'pembicara', $this->pembicara])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
