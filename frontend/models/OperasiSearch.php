<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Operasi;

/**
 * OperasiSearch represents the model behind the search form of `frontend\models\Operasi`.
 */
class OperasiSearch extends Operasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_operasi', 'jenis_anasthesi', 'kategori', 'operator1', 'operator2', 'operator3', 'asisten_operator1', 'asisten_operator2', 'asisten_operator3', 'instrumen', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'asisten_anestesi2', 'bidan', 'bidan2', 'bidan3', 'perawat_luar', 'omloop', 'omloop2', 'omloop3', 'omloop4', 'omloop5', 'dokter_pjanak', 'dokter_umum', 'kode_paket', 'status'], 'safe'],
            [['biayaoperator1', 'biayaoperator2', 'biayaoperator3', 'biayaasisten_operator1', 'biayaasisten_operator2', 'biayaasisten_operator3', 'biayainstrumen', 'biayadokter_anak', 'biayaperawaat_resusitas', 'biayadokter_anestesi', 'biayaasisten_anestesi', 'biayaasisten_anestesi2', 'biayabidan', 'biayabidan2', 'biayabidan3', 'biayaperawat_luar', 'biayaalat', 'biayasewaok', 'akomodasi', 'bagian_rs', 'biaya_omloop', 'biaya_omloop2', 'biaya_omloop3', 'biaya_omloop4', 'biaya_omloop5', 'biayasarpras', 'biaya_dokter_pjanak', 'biaya_dokter_umum'], 'number'],
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
        $query = Operasi::find();

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
            'tgl_operasi' => $this->tgl_operasi,
            'biayaoperator1' => $this->biayaoperator1,
            'biayaoperator2' => $this->biayaoperator2,
            'biayaoperator3' => $this->biayaoperator3,
            'biayaasisten_operator1' => $this->biayaasisten_operator1,
            'biayaasisten_operator2' => $this->biayaasisten_operator2,
            'biayaasisten_operator3' => $this->biayaasisten_operator3,
            'biayainstrumen' => $this->biayainstrumen,
            'biayadokter_anak' => $this->biayadokter_anak,
            'biayaperawaat_resusitas' => $this->biayaperawaat_resusitas,
            'biayadokter_anestesi' => $this->biayadokter_anestesi,
            'biayaasisten_anestesi' => $this->biayaasisten_anestesi,
            'biayaasisten_anestesi2' => $this->biayaasisten_anestesi2,
            'biayabidan' => $this->biayabidan,
            'biayabidan2' => $this->biayabidan2,
            'biayabidan3' => $this->biayabidan3,
            'biayaperawat_luar' => $this->biayaperawat_luar,
            'biayaalat' => $this->biayaalat,
            'biayasewaok' => $this->biayasewaok,
            'akomodasi' => $this->akomodasi,
            'bagian_rs' => $this->bagian_rs,
            'biaya_omloop' => $this->biaya_omloop,
            'biaya_omloop2' => $this->biaya_omloop2,
            'biaya_omloop3' => $this->biaya_omloop3,
            'biaya_omloop4' => $this->biaya_omloop4,
            'biaya_omloop5' => $this->biaya_omloop5,
            'biayasarpras' => $this->biayasarpras,
            'biaya_dokter_pjanak' => $this->biaya_dokter_pjanak,
            'biaya_dokter_umum' => $this->biaya_dokter_umum,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'jenis_anasthesi', $this->jenis_anasthesi])
            ->andFilterWhere(['like', 'kategori', $this->kategori])
            ->andFilterWhere(['like', 'operator1', $this->operator1])
            ->andFilterWhere(['like', 'operator2', $this->operator2])
            ->andFilterWhere(['like', 'operator3', $this->operator3])
            ->andFilterWhere(['like', 'asisten_operator1', $this->asisten_operator1])
            ->andFilterWhere(['like', 'asisten_operator2', $this->asisten_operator2])
            ->andFilterWhere(['like', 'asisten_operator3', $this->asisten_operator3])
            ->andFilterWhere(['like', 'instrumen', $this->instrumen])
            ->andFilterWhere(['like', 'dokter_anak', $this->dokter_anak])
            ->andFilterWhere(['like', 'perawaat_resusitas', $this->perawaat_resusitas])
            ->andFilterWhere(['like', 'dokter_anestesi', $this->dokter_anestesi])
            ->andFilterWhere(['like', 'asisten_anestesi', $this->asisten_anestesi])
            ->andFilterWhere(['like', 'asisten_anestesi2', $this->asisten_anestesi2])
            ->andFilterWhere(['like', 'bidan', $this->bidan])
            ->andFilterWhere(['like', 'bidan2', $this->bidan2])
            ->andFilterWhere(['like', 'bidan3', $this->bidan3])
            ->andFilterWhere(['like', 'perawat_luar', $this->perawat_luar])
            ->andFilterWhere(['like', 'omloop', $this->omloop])
            ->andFilterWhere(['like', 'omloop2', $this->omloop2])
            ->andFilterWhere(['like', 'omloop3', $this->omloop3])
            ->andFilterWhere(['like', 'omloop4', $this->omloop4])
            ->andFilterWhere(['like', 'omloop5', $this->omloop5])
            ->andFilterWhere(['like', 'dokter_pjanak', $this->dokter_pjanak])
            ->andFilterWhere(['like', 'dokter_umum', $this->dokter_umum])
            ->andFilterWhere(['like', 'kode_paket', $this->kode_paket])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
