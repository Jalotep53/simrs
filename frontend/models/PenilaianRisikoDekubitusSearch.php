<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenilaianRisikoDekubitus;

/**
 * PenilaianRisikoDekubitusSearch represents the model behind the search form of `frontend\models\PenilaianRisikoDekubitus`.
 */
class PenilaianRisikoDekubitusSearch extends PenilaianRisikoDekubitus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kondisi_fisik', 'status_mental', 'aktifitas', 'mobilitas', 'inkontinensia', 'kategorinilai', 'nip'], 'safe'],
            [['kondisi_fisik_nilai', 'status_mental_nilai', 'aktifitas_nilai', 'mobilitas_nilai', 'inkontinensia_nilai', 'totalnilai'], 'integer'],
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
        $query = PenilaianRisikoDekubitus::find();

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
            'kondisi_fisik_nilai' => $this->kondisi_fisik_nilai,
            'status_mental_nilai' => $this->status_mental_nilai,
            'aktifitas_nilai' => $this->aktifitas_nilai,
            'mobilitas_nilai' => $this->mobilitas_nilai,
            'inkontinensia_nilai' => $this->inkontinensia_nilai,
            'totalnilai' => $this->totalnilai,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kondisi_fisik', $this->kondisi_fisik])
            ->andFilterWhere(['like', 'status_mental', $this->status_mental])
            ->andFilterWhere(['like', 'aktifitas', $this->aktifitas])
            ->andFilterWhere(['like', 'mobilitas', $this->mobilitas])
            ->andFilterWhere(['like', 'inkontinensia', $this->inkontinensia])
            ->andFilterWhere(['like', 'kategorinilai', $this->kategorinilai])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
