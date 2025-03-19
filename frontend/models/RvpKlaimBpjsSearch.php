<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RvpKlaimBpjs;

/**
 * RvpKlaimBpjsSearch represents the model behind the search form of `frontend\models\RvpKlaimBpjs`.
 */
class RvpKlaimBpjsSearch extends RvpKlaimBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal_rvp', 'nip', 'no_sep', 'kd_rek', 'kd_rek_kontra'], 'safe'],
            [['totalpiutang', 'uangmuka', 'sudahdibayar', 'sisapiutang', 'tarifinacbg', 'dibayarbpjs', 'persenbayar', 'rugi', 'lebih', 'materialralan', 'bhpralan', 'tarif_tindakandrralan', 'tarif_tindakanprralan', 'ksoralan', 'menejemenralan', 'biaya_rawatralan', 'materialranap', 'bhpranap', 'tarif_tindakandrranap', 'tarif_tindakanprranap', 'ksoranap', 'menejemenranap', 'biaya_rawatranap', 'bagian_rslabralan', 'bhplabralan', 'tarif_perujuklabralan', 'tarif_tindakan_dokterlabralan', 'tarif_tindakan_petugaslabralan', 'ksolabralan', 'menejemenlabralan', 'biayalabralan', 'bagian_rslabranap', 'bhplabranap', 'tarif_perujuklabranap', 'tarif_tindakan_dokterlabranap', 'tarif_tindakan_petugaslabranap', 'ksolabranap', 'menejemenlabranap', 'biayalabranap', 'bagian_rsradiologiralan', 'bhpradiologiralan', 'tarif_perujukradiologiralan', 'tarif_tindakan_dokterradiologiralan', 'tarif_tindakan_petugasradiologiralan', 'ksoradiologiralan', 'menejemenradiologiralan', 'biayaradiologiralan', 'bagian_rsradiologiranap', 'bhpradiologiranap', 'tarif_perujukradiologiranap', 'tarif_tindakan_dokterradiologiranap', 'tarif_tindakan_petugasradiologiranap', 'ksoradiologiranap', 'menejemenradiologiranap', 'biayaradiologiranap', 'jmdokteroperasiralan', 'jmparamedisoperasiralan', 'bhpoperasiralan', 'pendapatanoperasiralan', 'jmdokteroperasiranap', 'jmparamedisoperasiranap', 'bhpoperasiranap', 'pendapatanoperasiranap', 'obatlangsung', 'obatralan', 'hppobatralan', 'obatranap', 'hppobatranap', 'returobat', 'tambahanbiaya', 'potonganbiaya', 'kamar', 'reseppulang', 'harianranap', 'registrasi', 'service', 'ppn_obat'], 'number'],
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
        $query = RvpKlaimBpjs::find();

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
            'tanggal_rvp' => $this->tanggal_rvp,
            'totalpiutang' => $this->totalpiutang,
            'uangmuka' => $this->uangmuka,
            'sudahdibayar' => $this->sudahdibayar,
            'sisapiutang' => $this->sisapiutang,
            'tarifinacbg' => $this->tarifinacbg,
            'dibayarbpjs' => $this->dibayarbpjs,
            'persenbayar' => $this->persenbayar,
            'rugi' => $this->rugi,
            'lebih' => $this->lebih,
            'materialralan' => $this->materialralan,
            'bhpralan' => $this->bhpralan,
            'tarif_tindakandrralan' => $this->tarif_tindakandrralan,
            'tarif_tindakanprralan' => $this->tarif_tindakanprralan,
            'ksoralan' => $this->ksoralan,
            'menejemenralan' => $this->menejemenralan,
            'biaya_rawatralan' => $this->biaya_rawatralan,
            'materialranap' => $this->materialranap,
            'bhpranap' => $this->bhpranap,
            'tarif_tindakandrranap' => $this->tarif_tindakandrranap,
            'tarif_tindakanprranap' => $this->tarif_tindakanprranap,
            'ksoranap' => $this->ksoranap,
            'menejemenranap' => $this->menejemenranap,
            'biaya_rawatranap' => $this->biaya_rawatranap,
            'bagian_rslabralan' => $this->bagian_rslabralan,
            'bhplabralan' => $this->bhplabralan,
            'tarif_perujuklabralan' => $this->tarif_perujuklabralan,
            'tarif_tindakan_dokterlabralan' => $this->tarif_tindakan_dokterlabralan,
            'tarif_tindakan_petugaslabralan' => $this->tarif_tindakan_petugaslabralan,
            'ksolabralan' => $this->ksolabralan,
            'menejemenlabralan' => $this->menejemenlabralan,
            'biayalabralan' => $this->biayalabralan,
            'bagian_rslabranap' => $this->bagian_rslabranap,
            'bhplabranap' => $this->bhplabranap,
            'tarif_perujuklabranap' => $this->tarif_perujuklabranap,
            'tarif_tindakan_dokterlabranap' => $this->tarif_tindakan_dokterlabranap,
            'tarif_tindakan_petugaslabranap' => $this->tarif_tindakan_petugaslabranap,
            'ksolabranap' => $this->ksolabranap,
            'menejemenlabranap' => $this->menejemenlabranap,
            'biayalabranap' => $this->biayalabranap,
            'bagian_rsradiologiralan' => $this->bagian_rsradiologiralan,
            'bhpradiologiralan' => $this->bhpradiologiralan,
            'tarif_perujukradiologiralan' => $this->tarif_perujukradiologiralan,
            'tarif_tindakan_dokterradiologiralan' => $this->tarif_tindakan_dokterradiologiralan,
            'tarif_tindakan_petugasradiologiralan' => $this->tarif_tindakan_petugasradiologiralan,
            'ksoradiologiralan' => $this->ksoradiologiralan,
            'menejemenradiologiralan' => $this->menejemenradiologiralan,
            'biayaradiologiralan' => $this->biayaradiologiralan,
            'bagian_rsradiologiranap' => $this->bagian_rsradiologiranap,
            'bhpradiologiranap' => $this->bhpradiologiranap,
            'tarif_perujukradiologiranap' => $this->tarif_perujukradiologiranap,
            'tarif_tindakan_dokterradiologiranap' => $this->tarif_tindakan_dokterradiologiranap,
            'tarif_tindakan_petugasradiologiranap' => $this->tarif_tindakan_petugasradiologiranap,
            'ksoradiologiranap' => $this->ksoradiologiranap,
            'menejemenradiologiranap' => $this->menejemenradiologiranap,
            'biayaradiologiranap' => $this->biayaradiologiranap,
            'jmdokteroperasiralan' => $this->jmdokteroperasiralan,
            'jmparamedisoperasiralan' => $this->jmparamedisoperasiralan,
            'bhpoperasiralan' => $this->bhpoperasiralan,
            'pendapatanoperasiralan' => $this->pendapatanoperasiralan,
            'jmdokteroperasiranap' => $this->jmdokteroperasiranap,
            'jmparamedisoperasiranap' => $this->jmparamedisoperasiranap,
            'bhpoperasiranap' => $this->bhpoperasiranap,
            'pendapatanoperasiranap' => $this->pendapatanoperasiranap,
            'obatlangsung' => $this->obatlangsung,
            'obatralan' => $this->obatralan,
            'hppobatralan' => $this->hppobatralan,
            'obatranap' => $this->obatranap,
            'hppobatranap' => $this->hppobatranap,
            'returobat' => $this->returobat,
            'tambahanbiaya' => $this->tambahanbiaya,
            'potonganbiaya' => $this->potonganbiaya,
            'kamar' => $this->kamar,
            'reseppulang' => $this->reseppulang,
            'harianranap' => $this->harianranap,
            'registrasi' => $this->registrasi,
            'service' => $this->service,
            'ppn_obat' => $this->ppn_obat,
        ]);

        $query->andFilterWhere(['like', 'no_rawat', $this->no_rawat])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'no_sep', $this->no_sep])
            ->andFilterWhere(['like', 'kd_rek', $this->kd_rek])
            ->andFilterWhere(['like', 'kd_rek_kontra', $this->kd_rek_kontra]);

        return $dataProvider;
    }
}
