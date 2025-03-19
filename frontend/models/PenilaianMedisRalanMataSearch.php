<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianMedisRalanMata;

/**
 * PenilaianMedisRalanMataSearch represents the model behind the search form of `frontend\models\PenilaianMedisRalanMata`.
 */
class PenilaianMedisRalanMataSearch extends PenilaianMedisRalanMata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'keluhan_utama', 'rps', 'rpd', 'rpo', 'alergi', 'status', 'td', 'nadi', 'rr', 'suhu', 'nyeri', 'bb', 'visuskanan', 'visuskiri', 'cckanan', 'cckiri', 'palkanan', 'palkiri', 'conkanan', 'conkiri', 'corneakanan', 'corneakiri', 'coakanan', 'coakiri', 'pupilkanan', 'pupilkiri', 'lensakanan', 'lensakiri', 'funduskanan', 'funduskiri', 'papilkanan', 'papilkiri', 'retinakanan', 'retinakiri', 'makulakanan', 'makulakiri', 'tiokanan', 'tiokiri', 'mbokanan', 'mbokiri', 'lab', 'rad', 'penunjang', 'tes', 'pemeriksaan', 'diagnosis', 'diagnosisbdg', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'safe'],
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
        $query = PenilaianMedisRalanMata::find();

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
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'anamnesis', $this->anamnesis])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'keluhan_utama', $this->keluhan_utama])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'rpo', $this->rpo])
            ->andFilterWhere(['like', 'alergi', $this->alergi])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'nyeri', $this->nyeri])
            ->andFilterWhere(['like', 'bb', $this->bb])
            ->andFilterWhere(['like', 'visuskanan', $this->visuskanan])
            ->andFilterWhere(['like', 'visuskiri', $this->visuskiri])
            ->andFilterWhere(['like', 'cckanan', $this->cckanan])
            ->andFilterWhere(['like', 'cckiri', $this->cckiri])
            ->andFilterWhere(['like', 'palkanan', $this->palkanan])
            ->andFilterWhere(['like', 'palkiri', $this->palkiri])
            ->andFilterWhere(['like', 'conkanan', $this->conkanan])
            ->andFilterWhere(['like', 'conkiri', $this->conkiri])
            ->andFilterWhere(['like', 'corneakanan', $this->corneakanan])
            ->andFilterWhere(['like', 'corneakiri', $this->corneakiri])
            ->andFilterWhere(['like', 'coakanan', $this->coakanan])
            ->andFilterWhere(['like', 'coakiri', $this->coakiri])
            ->andFilterWhere(['like', 'pupilkanan', $this->pupilkanan])
            ->andFilterWhere(['like', 'pupilkiri', $this->pupilkiri])
            ->andFilterWhere(['like', 'lensakanan', $this->lensakanan])
            ->andFilterWhere(['like', 'lensakiri', $this->lensakiri])
            ->andFilterWhere(['like', 'funduskanan', $this->funduskanan])
            ->andFilterWhere(['like', 'funduskiri', $this->funduskiri])
            ->andFilterWhere(['like', 'papilkanan', $this->papilkanan])
            ->andFilterWhere(['like', 'papilkiri', $this->papilkiri])
            ->andFilterWhere(['like', 'retinakanan', $this->retinakanan])
            ->andFilterWhere(['like', 'retinakiri', $this->retinakiri])
            ->andFilterWhere(['like', 'makulakanan', $this->makulakanan])
            ->andFilterWhere(['like', 'makulakiri', $this->makulakiri])
            ->andFilterWhere(['like', 'tiokanan', $this->tiokanan])
            ->andFilterWhere(['like', 'tiokiri', $this->tiokiri])
            ->andFilterWhere(['like', 'mbokanan', $this->mbokanan])
            ->andFilterWhere(['like', 'mbokiri', $this->mbokiri])
            ->andFilterWhere(['like', 'lab', $this->lab])
            ->andFilterWhere(['like', 'rad', $this->rad])
            ->andFilterWhere(['like', 'penunjang', $this->penunjang])
            ->andFilterWhere(['like', 'tes', $this->tes])
            ->andFilterWhere(['like', 'pemeriksaan', $this->pemeriksaan])
            ->andFilterWhere(['like', 'diagnosis', $this->diagnosis])
            ->andFilterWhere(['like', 'diagnosisbdg', $this->diagnosisbdg])
            ->andFilterWhere(['like', 'permasalahan', $this->permasalahan])
            ->andFilterWhere(['like', 'terapi', $this->terapi])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'edukasi', $this->edukasi]);

        return $dataProvider;
    }
}
