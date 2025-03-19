<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Tokopiutang;

/**
 * TokopiutangSearch represents the model behind the search form of `frontend\models\Tokopiutang`.
 */
class TokopiutangSearch extends Tokopiutang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nota_piutang', 'tgl_piutang', 'nip', 'no_member', 'nm_member', 'catatan', 'jns_jual', 'tgltempo'], 'safe'],
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
        $query = Tokopiutang::find();

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
            ->andFilterWhere(['like', 'no_member', $this->no_member])
            ->andFilterWhere(['like', 'nm_member', $this->nm_member])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'jns_jual', $this->jns_jual]);

        return $dataProvider;
    }
}
