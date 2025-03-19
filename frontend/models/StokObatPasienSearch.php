<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\StokObatPasien;

/**
 * StokObatPasienSearch represents the model behind the search form of `frontend\models\StokObatPasien`.
 */
class StokObatPasienSearch extends StokObatPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rawat', 'kode_brng', 'kd_bangsal', 'no_batch', 'no_faktur', 'aturan_pakai', 'jam00', 'jam01', 'jam02', 'jam03', 'jam04', 'jam05', 'jam06', 'jam07', 'jam08', 'jam09', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14', 'jam15', 'jam16', 'jam17', 'jam18', 'jam19', 'jam20', 'jam21', 'jam22', 'jam23'], 'safe'],
            [['jumlah'], 'number'],
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
        $query = StokObatPasien::find();

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
            'jam' => $this->jam,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'kode_brng', $this->kode_brng])
            ->andFilterWhere(['like', 'kd_bangsal', $this->kd_bangsal])
            ->andFilterWhere(['like', 'no_batch', $this->no_batch])
            ->andFilterWhere(['like', 'no_faktur', $this->no_faktur])
            ->andFilterWhere(['like', 'aturan_pakai', $this->aturan_pakai])
            ->andFilterWhere(['like', 'jam00', $this->jam00])
            ->andFilterWhere(['like', 'jam01', $this->jam01])
            ->andFilterWhere(['like', 'jam02', $this->jam02])
            ->andFilterWhere(['like', 'jam03', $this->jam03])
            ->andFilterWhere(['like', 'jam04', $this->jam04])
            ->andFilterWhere(['like', 'jam05', $this->jam05])
            ->andFilterWhere(['like', 'jam06', $this->jam06])
            ->andFilterWhere(['like', 'jam07', $this->jam07])
            ->andFilterWhere(['like', 'jam08', $this->jam08])
            ->andFilterWhere(['like', 'jam09', $this->jam09])
            ->andFilterWhere(['like', 'jam10', $this->jam10])
            ->andFilterWhere(['like', 'jam11', $this->jam11])
            ->andFilterWhere(['like', 'jam12', $this->jam12])
            ->andFilterWhere(['like', 'jam13', $this->jam13])
            ->andFilterWhere(['like', 'jam14', $this->jam14])
            ->andFilterWhere(['like', 'jam15', $this->jam15])
            ->andFilterWhere(['like', 'jam16', $this->jam16])
            ->andFilterWhere(['like', 'jam17', $this->jam17])
            ->andFilterWhere(['like', 'jam18', $this->jam18])
            ->andFilterWhere(['like', 'jam19', $this->jam19])
            ->andFilterWhere(['like', 'jam20', $this->jam20])
            ->andFilterWhere(['like', 'jam21', $this->jam21])
            ->andFilterWhere(['like', 'jam22', $this->jam22])
            ->andFilterWhere(['like', 'jam23', $this->jam23]);

        return $dataProvider;
    }
}
