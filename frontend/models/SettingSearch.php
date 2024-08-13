<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Setting;

/**
 * SettingSearch represents the model behind the search form of `frontend\models\Setting`.
 */
class SettingSearch extends Setting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_instansi', 'alamat_instansi', 'kabupaten', 'propinsi', 'kontak', 'email', 'aktifkan', 'kode_ppk', 'kode_ppkinhealth', 'kode_ppkkemenkes', 'wallpaper', 'logo'], 'safe'],
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
        $query = Setting::find();

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
        $query->andFilterWhere(['like', 'nama_instansi', $this->nama_instansi])
            ->andFilterWhere(['like', 'alamat_instansi', $this->alamat_instansi])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'propinsi', $this->propinsi])
            ->andFilterWhere(['like', 'kontak', $this->kontak])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'aktifkan', $this->aktifkan])
            ->andFilterWhere(['like', 'kode_ppk', $this->kode_ppk])
            ->andFilterWhere(['like', 'kode_ppkinhealth', $this->kode_ppkinhealth])
            ->andFilterWhere(['like', 'kode_ppkkemenkes', $this->kode_ppkkemenkes])
            ->andFilterWhere(['like', 'wallpaper', $this->wallpaper])
            ->andFilterWhere(['like', 'logo', $this->logo]);

        return $dataProvider;
    }
}
