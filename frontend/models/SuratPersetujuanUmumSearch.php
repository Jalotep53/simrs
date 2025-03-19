<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SuratPersetujuanUmum;

/**
 * SuratPersetujuanUmumSearch represents the model behind the search form of `frontend\models\SuratPersetujuanUmum`.
 */
class SuratPersetujuanUmumSearch extends SuratPersetujuanUmum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat', 'no_rawat', 'tanggal', 'pengobatan_kepada', 'nilai_kepercayaan', 'nama_pj', 'umur_pj', 'no_ktppj', 'jkpj', 'bertindak_atas', 'no_telp', 'nip'], 'safe'],
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
        $query = SuratPersetujuanUmum::find();

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

        $query->andFilterWhere(['like', 'no_surat', $this->no_surat])
            ->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'pengobatan_kepada', $this->pengobatan_kepada])
            ->andFilterWhere(['like', 'nilai_kepercayaan', $this->nilai_kepercayaan])
            ->andFilterWhere(['like', 'nama_pj', $this->nama_pj])
            ->andFilterWhere(['like', 'umur_pj', $this->umur_pj])
            ->andFilterWhere(['like', 'no_ktppj', $this->no_ktppj])
            ->andFilterWhere(['like', 'jkpj', $this->jkpj])
            ->andFilterWhere(['like', 'bertindak_atas', $this->bertindak_atas])
            ->andFilterWhere(['like', 'no_telp', $this->no_telp])
            ->andFilterWhere(['like', 'nip', $this->nip]);

        return $dataProvider;
    }
}
