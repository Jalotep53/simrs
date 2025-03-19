<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AuditCuciTanganMedis;

/**
 * AuditCuciTanganMedisSearch represents the model behind the search form of `frontend\models\AuditCuciTanganMedis`.
 */
class AuditCuciTanganMedisSearch extends AuditCuciTanganMedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nik', 'sebelum_menyentuh_pasien', 'sebelum_tehnik_aseptik', 'setelah_terpapar_cairan_tubuh_pasien', 'setelah_kontak_dengan_pasien', 'setelah_kontak_dengan_lingkungan_pasien'], 'safe'],
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
        $query = AuditCuciTanganMedis::find();

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

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'sebelum_menyentuh_pasien', $this->sebelum_menyentuh_pasien])
            ->andFilterWhere(['like', 'sebelum_tehnik_aseptik', $this->sebelum_tehnik_aseptik])
            ->andFilterWhere(['like', 'setelah_terpapar_cairan_tubuh_pasien', $this->setelah_terpapar_cairan_tubuh_pasien])
            ->andFilterWhere(['like', 'setelah_kontak_dengan_pasien', $this->setelah_kontak_dengan_pasien])
            ->andFilterWhere(['like', 'setelah_kontak_dengan_lingkungan_pasien', $this->setelah_kontak_dengan_lingkungan_pasien]);

        return $dataProvider;
    }
}
