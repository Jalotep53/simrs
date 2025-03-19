<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianPasienTerminal;

/**
 * PenilaianPasienTerminalSearch represents the model behind the search form of `frontend\models\PenilaianPasienTerminal`.
 */
class PenilaianPasienTerminalSearch extends PenilaianPasienTerminal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'diagnosa', 'rps', 'rpd', 'keadaan_umum', 'kesadaran', 'td', 'nadi', 'suhu', 'rr', 'spo2', 'skala_nyeri', 'tahap_pasien_menjelang_ajal', 'tanda_klinis_menjelang_kematian', 'kebutuhan_spiritual_pasien', 'nip'], 'safe'],
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
        $query = PenilaianPasienTerminal::find();

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
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'rps', $this->rps])
            ->andFilterWhere(['like', 'rpd', $this->rpd])
            ->andFilterWhere(['like', 'keadaan_umum', $this->keadaan_umum])
            ->andFilterWhere(['like', 'kesadaran', $this->kesadaran])
            ->andFilterWhere(['like', 'td', $this->td])
            ->andFilterWhere(['like', 'nadi', $this->nadi])
            ->andFilterWhere(['like', 'suhu', $this->suhu])
            ->andFilterWhere(['like', 'rr', $this->rr])
            ->andFilterWhere(['like', 'spo2', $this->spo2])
            ->andFilterWhere(['like', 'skala_nyeri', $this->skala_nyeri])
            ->andFilterWhere(['like', 'tahap_pasien_menjelang_ajal', $this->tahap_pasien_menjelang_ajal])
            ->andFilterWhere(['like', 'tanda_klinis_menjelang_kematian', $this->tanda_klinis_menjelang_kematian])
            ->andFilterWhere(['like', 'kebutuhan_spiritual_pasien', $this->kebutuhan_spiritual_pasien])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
