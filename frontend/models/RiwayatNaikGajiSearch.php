<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RiwayatNaikGaji;

/**
 * RiwayatNaikGajiSearch represents the model behind the search form of `frontend\models\RiwayatNaikGaji`.
 */
class RiwayatNaikGajiSearch extends RiwayatNaikGaji
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'masa_kerja', 'bulan_kerja'], 'integer'],
            [['pangkatjabatan', 'tmt_berkala', 'tmt_berkala_yad', 'no_sk', 'tgl_sk', 'berkas'], 'safe'],
            [['gapok'], 'number'],
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
        $query = RiwayatNaikGaji::find();

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
            'id' => $this->id,
            'gapok' => $this->gapok,
            'tmt_berkala' => $this->tmt_berkala,
            'tmt_berkala_yad' => $this->tmt_berkala_yad,
            'tgl_sk' => $this->tgl_sk,
            'masa_kerja' => $this->masa_kerja,
            'bulan_kerja' => $this->bulan_kerja,
        ]);

        $query->andFilterWhere(['like', 'pangkatjabatan', $this->pangkatjabatan])
            ->andFilterWhere(['like', 'no_sk', $this->no_sk])
            ->andFilterWhere(['like', 'berkas', $this->berkas]);

        return $dataProvider;
    }
}
