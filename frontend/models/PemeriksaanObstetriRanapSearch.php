<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PemeriksaanObstetriRanap;

/**
 * PemeriksaanObstetriRanapSearch represents the model behind the search form of `frontend\models\PemeriksaanObstetriRanap`.
 */
class PemeriksaanObstetriRanapSearch extends PemeriksaanObstetriRanap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_perawatan', 'jam_rawat', 'tinggi_uteri', 'janin', 'letak', 'panggul', 'denyut', 'kontraksi', 'kualitas_mnt', 'kualitas_dtk', 'fluksus', 'albus', 'vulva', 'portio', 'dalam', 'tebal', 'arah', 'pembukaan', 'penurunan', 'denominator', 'ketuban', 'feto'], 'safe'],
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
        $query = PemeriksaanObstetriRanap::find();

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
            ->andFilterWhere(['like', 'tinggi_uteri', $this->tinggi_uteri])
            ->andFilterWhere(['like', 'janin', $this->janin])
            ->andFilterWhere(['like', 'letak', $this->letak])
            ->andFilterWhere(['like', 'panggul', $this->panggul])
            ->andFilterWhere(['like', 'denyut', $this->denyut])
            ->andFilterWhere(['like', 'kontraksi', $this->kontraksi])
            ->andFilterWhere(['like', 'kualitas_mnt', $this->kualitas_mnt])
            ->andFilterWhere(['like', 'kualitas_dtk', $this->kualitas_dtk])
            ->andFilterWhere(['like', 'fluksus', $this->fluksus])
            ->andFilterWhere(['like', 'albus', $this->albus])
            ->andFilterWhere(['like', 'vulva', $this->vulva])
            ->andFilterWhere(['like', 'portio', $this->portio])
            ->andFilterWhere(['like', 'dalam', $this->dalam])
            ->andFilterWhere(['like', 'tebal', $this->tebal])
            ->andFilterWhere(['like', 'arah', $this->arah])
            ->andFilterWhere(['like', 'pembukaan', $this->pembukaan])
            ->andFilterWhere(['like', 'penurunan', $this->penurunan])
            ->andFilterWhere(['like', 'denominator', $this->denominator])
            ->andFilterWhere(['like', 'ketuban', $this->ketuban])
            ->andFilterWhere(['like', 'feto', $this->feto]);

        return $dataProvider;
    }
}
