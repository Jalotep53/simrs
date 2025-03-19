<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PerawatanCorona;

/**
 * PerawatanCoronaSearch represents the model behind the search form of `frontend\models\PerawatanCorona`.
 */
class PerawatanCoronaSearch extends PerawatanCorona
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'pemulasaraan_jenazah', 'kantong_jenazah', 'peti_jenazah', 'plastik_erat', 'desinfektan_jenazah', 'mobil_jenazah', 'desinfektan_mobil_jenazah', 'covid19_status_cd', 'nomor_kartu_t', 'covid19_cc_ind'], 'safe'],
            [['episodes1', 'episodes2', 'episodes3', 'episodes4', 'episodes5', 'episodes6'], 'integer'],
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
        $query = PerawatanCorona::find();

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
            'episodes1' => $this->episodes1,
            'episodes2' => $this->episodes2,
            'episodes3' => $this->episodes3,
            'episodes4' => $this->episodes4,
            'episodes5' => $this->episodes5,
            'episodes6' => $this->episodes6,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'pemulasaraan_jenazah', $this->pemulasaraan_jenazah])
            ->andFilterWhere(['like', 'kantong_jenazah', $this->kantong_jenazah])
            ->andFilterWhere(['like', 'peti_jenazah', $this->peti_jenazah])
            ->andFilterWhere(['like', 'plastik_erat', $this->plastik_erat])
            ->andFilterWhere(['like', 'desinfektan_jenazah', $this->desinfektan_jenazah])
            ->andFilterWhere(['like', 'mobil_jenazah', $this->mobil_jenazah])
            ->andFilterWhere(['like', 'desinfektan_mobil_jenazah', $this->desinfektan_mobil_jenazah])
            ->andFilterWhere(['like', 'covid19_status_cd', $this->covid19_status_cd])
            ->andFilterWhere(['like', 'nomor_kartu_t', $this->nomor_kartu_t])
            ->andFilterWhere(['like', 'covid19_cc_ind', $this->covid19_cc_ind]);

        return $dataProvider;
    }
}
