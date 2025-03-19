<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Piutang;

/**
 * PiutangSearch represents the model behind the search form of `frontend\models\Piutang`.
 */
class PiutangSearch extends Piutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'tgl_piutang', 'nip', 'no_rkm_medis', 'nm_pasien', 'catatan', 'jns_jual', 'status', 'tgltempo', 'kd_bangsal'], 'safe'],
            [['ongkir', 'uangmuka', 'sisapiutang'], 'number'],
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
        $query = Piutang::find();

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
            'tgl_piutang' => $this->tgl_piutang,
            'ongkir' => $this->ongkir,
            'uangmuka' => $this->uangmuka,
            'sisapiutang' => $this->sisapiutang,
            'tgltempo' => $this->tgltempo,
        ]);

        $query->andFilterWhere(['like', 'nota_piutang', $this->nota_piutang])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'no_rkm_medis', $this->no_rkm_medis])
            ->andFilterWhere(['like', 'nm_pasien', $this->nm_pasien])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'jns_jual', $this->jns_jual])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal]);

        return $dataProvider;
    }
}
