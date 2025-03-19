<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditBundleVap;

/**
 * AuditBundleVapSearch represents the model behind the search form of `frontend\models\AuditBundleVap`.
 */
class AuditBundleVapSearch extends AuditBundleVap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang', 'posisi_kepala', 'pengkajian_setiap_hari', 'hand_hygiene', 'oral_hygiene', 'suction_manajemen_sekresi', 'profilaksis_peptic_ulcer', 'dvt_profiklasisi', 'penggunaan_apd_sesuai'], 'safe'],
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
        $query = AuditBundleVap::find();

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

        $query->andFilterWhere(['like', 'id_ruang', $this->id_ruang])
            ->andFilterWhere(['like', 'posisi_kepala', $this->posisi_kepala])
            ->andFilterWhere(['like', 'pengkajian_setiap_hari', $this->pengkajian_setiap_hari])
            ->andFilterWhere(['like', 'hand_hygiene', $this->hand_hygiene])
            ->andFilterWhere(['like', 'oral_hygiene', $this->oral_hygiene])
            ->andFilterWhere(['like', 'suction_manajemen_sekresi', $this->suction_manajemen_sekresi])
            ->andFilterWhere(['like', 'profilaksis_peptic_ulcer', $this->profilaksis_peptic_ulcer])
            ->andFilterWhere(['like', 'dvt_profiklasisi', $this->dvt_profiklasisi])
            ->andFilterWhere(['like', 'penggunaan_apd_sesuai', $this->penggunaan_apd_sesuai]);

        return $dataProvider;
    }
}
