<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rvp_klaim_bpjs".
 *
 * @property string $no_rawat
 * @property string|null $tanggal_rvp
 * @property string|null $nip
 * @property float|null $totalpiutang
 * @property float|null $uangmuka
 * @property float|null $sudahdibayar
 * @property float|null $sisapiutang
 * @property float|null $tarifinacbg
 * @property float|null $dibayarbpjs
 * @property float|null $persenbayar
 * @property float|null $rugi
 * @property float|null $lebih
 * @property float|null $materialralan
 * @property float|null $bhpralan
 * @property float|null $tarif_tindakandrralan
 * @property float|null $tarif_tindakanprralan
 * @property float|null $ksoralan
 * @property float|null $menejemenralan
 * @property float|null $biaya_rawatralan
 * @property float|null $materialranap
 * @property float|null $bhpranap
 * @property float|null $tarif_tindakandrranap
 * @property float|null $tarif_tindakanprranap
 * @property float|null $ksoranap
 * @property float|null $menejemenranap
 * @property float|null $biaya_rawatranap
 * @property float|null $bagian_rslabralan
 * @property float|null $bhplabralan
 * @property float|null $tarif_perujuklabralan
 * @property float|null $tarif_tindakan_dokterlabralan
 * @property float|null $tarif_tindakan_petugaslabralan
 * @property float|null $ksolabralan
 * @property float|null $menejemenlabralan
 * @property float|null $biayalabralan
 * @property float|null $bagian_rslabranap
 * @property float|null $bhplabranap
 * @property float|null $tarif_perujuklabranap
 * @property float|null $tarif_tindakan_dokterlabranap
 * @property float|null $tarif_tindakan_petugaslabranap
 * @property float|null $ksolabranap
 * @property float|null $menejemenlabranap
 * @property float|null $biayalabranap
 * @property float|null $bagian_rsradiologiralan
 * @property float|null $bhpradiologiralan
 * @property float|null $tarif_perujukradiologiralan
 * @property float|null $tarif_tindakan_dokterradiologiralan
 * @property float|null $tarif_tindakan_petugasradiologiralan
 * @property float|null $ksoradiologiralan
 * @property float|null $menejemenradiologiralan
 * @property float|null $biayaradiologiralan
 * @property float|null $bagian_rsradiologiranap
 * @property float|null $bhpradiologiranap
 * @property float|null $tarif_perujukradiologiranap
 * @property float|null $tarif_tindakan_dokterradiologiranap
 * @property float|null $tarif_tindakan_petugasradiologiranap
 * @property float|null $ksoradiologiranap
 * @property float|null $menejemenradiologiranap
 * @property float|null $biayaradiologiranap
 * @property float|null $jmdokteroperasiralan
 * @property float|null $jmparamedisoperasiralan
 * @property float|null $bhpoperasiralan
 * @property float|null $pendapatanoperasiralan
 * @property float|null $jmdokteroperasiranap
 * @property float|null $jmparamedisoperasiranap
 * @property float|null $bhpoperasiranap
 * @property float|null $pendapatanoperasiranap
 * @property float|null $obatlangsung
 * @property float|null $obatralan
 * @property float|null $hppobatralan
 * @property float|null $obatranap
 * @property float|null $hppobatranap
 * @property float|null $returobat
 * @property float|null $tambahanbiaya
 * @property float|null $potonganbiaya
 * @property float|null $kamar
 * @property float|null $reseppulang
 * @property float|null $harianranap
 * @property float|null $registrasi
 * @property string $no_sep
 * @property string $kd_rek
 * @property string $kd_rek_kontra
 * @property float $service
 * @property float $ppn_obat
 *
 * @property Rekening $kdRek
 * @property Rekening $kdRekKontra
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class RvpKlaimBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rvp_klaim_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'no_sep', 'kd_rek', 'kd_rek_kontra', 'service', 'ppn_obat'], 'required'],
            [['tanggal_rvp'], 'safe'],
            [['totalpiutang', 'uangmuka', 'sudahdibayar', 'sisapiutang', 'tarifinacbg', 'dibayarbpjs', 'persenbayar', 'rugi', 'lebih', 'materialralan', 'bhpralan', 'tarif_tindakandrralan', 'tarif_tindakanprralan', 'ksoralan', 'menejemenralan', 'biaya_rawatralan', 'materialranap', 'bhpranap', 'tarif_tindakandrranap', 'tarif_tindakanprranap', 'ksoranap', 'menejemenranap', 'biaya_rawatranap', 'bagian_rslabralan', 'bhplabralan', 'tarif_perujuklabralan', 'tarif_tindakan_dokterlabralan', 'tarif_tindakan_petugaslabralan', 'ksolabralan', 'menejemenlabralan', 'biayalabralan', 'bagian_rslabranap', 'bhplabranap', 'tarif_perujuklabranap', 'tarif_tindakan_dokterlabranap', 'tarif_tindakan_petugaslabranap', 'ksolabranap', 'menejemenlabranap', 'biayalabranap', 'bagian_rsradiologiralan', 'bhpradiologiralan', 'tarif_perujukradiologiralan', 'tarif_tindakan_dokterradiologiralan', 'tarif_tindakan_petugasradiologiralan', 'ksoradiologiralan', 'menejemenradiologiralan', 'biayaradiologiralan', 'bagian_rsradiologiranap', 'bhpradiologiranap', 'tarif_perujukradiologiranap', 'tarif_tindakan_dokterradiologiranap', 'tarif_tindakan_petugasradiologiranap', 'ksoradiologiranap', 'menejemenradiologiranap', 'biayaradiologiranap', 'jmdokteroperasiralan', 'jmparamedisoperasiralan', 'bhpoperasiralan', 'pendapatanoperasiralan', 'jmdokteroperasiranap', 'jmparamedisoperasiranap', 'bhpoperasiranap', 'pendapatanoperasiranap', 'obatlangsung', 'obatralan', 'hppobatralan', 'obatranap', 'hppobatranap', 'returobat', 'tambahanbiaya', 'potonganbiaya', 'kamar', 'reseppulang', 'harianranap', 'registrasi', 'service', 'ppn_obat'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['no_sep'], 'string', 'max' => 40],
            [['kd_rek', 'kd_rek_kontra'], 'string', 'max' => 15],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
            [['kd_rek'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek' => 'kd_rek']],
            [['kd_rek_kontra'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['kd_rek_kontra' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal_rvp' => 'Tanggal Rvp',
            'nip' => 'Nip',
            'totalpiutang' => 'Totalpiutang',
            'uangmuka' => 'Uangmuka',
            'sudahdibayar' => 'Sudahdibayar',
            'sisapiutang' => 'Sisapiutang',
            'tarifinacbg' => 'Tarifinacbg',
            'dibayarbpjs' => 'Dibayarbpjs',
            'persenbayar' => 'Persenbayar',
            'rugi' => 'Rugi',
            'lebih' => 'Lebih',
            'materialralan' => 'Materialralan',
            'bhpralan' => 'Bhpralan',
            'tarif_tindakandrralan' => 'Tarif Tindakandrralan',
            'tarif_tindakanprralan' => 'Tarif Tindakanprralan',
            'ksoralan' => 'Ksoralan',
            'menejemenralan' => 'Menejemenralan',
            'biaya_rawatralan' => 'Biaya Rawatralan',
            'materialranap' => 'Materialranap',
            'bhpranap' => 'Bhpranap',
            'tarif_tindakandrranap' => 'Tarif Tindakandrranap',
            'tarif_tindakanprranap' => 'Tarif Tindakanprranap',
            'ksoranap' => 'Ksoranap',
            'menejemenranap' => 'Menejemenranap',
            'biaya_rawatranap' => 'Biaya Rawatranap',
            'bagian_rslabralan' => 'Bagian Rslabralan',
            'bhplabralan' => 'Bhplabralan',
            'tarif_perujuklabralan' => 'Tarif Perujuklabralan',
            'tarif_tindakan_dokterlabralan' => 'Tarif Tindakan Dokterlabralan',
            'tarif_tindakan_petugaslabralan' => 'Tarif Tindakan Petugaslabralan',
            'ksolabralan' => 'Ksolabralan',
            'menejemenlabralan' => 'Menejemenlabralan',
            'biayalabralan' => 'Biayalabralan',
            'bagian_rslabranap' => 'Bagian Rslabranap',
            'bhplabranap' => 'Bhplabranap',
            'tarif_perujuklabranap' => 'Tarif Perujuklabranap',
            'tarif_tindakan_dokterlabranap' => 'Tarif Tindakan Dokterlabranap',
            'tarif_tindakan_petugaslabranap' => 'Tarif Tindakan Petugaslabranap',
            'ksolabranap' => 'Ksolabranap',
            'menejemenlabranap' => 'Menejemenlabranap',
            'biayalabranap' => 'Biayalabranap',
            'bagian_rsradiologiralan' => 'Bagian Rsradiologiralan',
            'bhpradiologiralan' => 'Bhpradiologiralan',
            'tarif_perujukradiologiralan' => 'Tarif Perujukradiologiralan',
            'tarif_tindakan_dokterradiologiralan' => 'Tarif Tindakan Dokterradiologiralan',
            'tarif_tindakan_petugasradiologiralan' => 'Tarif Tindakan Petugasradiologiralan',
            'ksoradiologiralan' => 'Ksoradiologiralan',
            'menejemenradiologiralan' => 'Menejemenradiologiralan',
            'biayaradiologiralan' => 'Biayaradiologiralan',
            'bagian_rsradiologiranap' => 'Bagian Rsradiologiranap',
            'bhpradiologiranap' => 'Bhpradiologiranap',
            'tarif_perujukradiologiranap' => 'Tarif Perujukradiologiranap',
            'tarif_tindakan_dokterradiologiranap' => 'Tarif Tindakan Dokterradiologiranap',
            'tarif_tindakan_petugasradiologiranap' => 'Tarif Tindakan Petugasradiologiranap',
            'ksoradiologiranap' => 'Ksoradiologiranap',
            'menejemenradiologiranap' => 'Menejemenradiologiranap',
            'biayaradiologiranap' => 'Biayaradiologiranap',
            'jmdokteroperasiralan' => 'Jmdokteroperasiralan',
            'jmparamedisoperasiralan' => 'Jmparamedisoperasiralan',
            'bhpoperasiralan' => 'Bhpoperasiralan',
            'pendapatanoperasiralan' => 'Pendapatanoperasiralan',
            'jmdokteroperasiranap' => 'Jmdokteroperasiranap',
            'jmparamedisoperasiranap' => 'Jmparamedisoperasiranap',
            'bhpoperasiranap' => 'Bhpoperasiranap',
            'pendapatanoperasiranap' => 'Pendapatanoperasiranap',
            'obatlangsung' => 'Obatlangsung',
            'obatralan' => 'Obatralan',
            'hppobatralan' => 'Hppobatralan',
            'obatranap' => 'Obatranap',
            'hppobatranap' => 'Hppobatranap',
            'returobat' => 'Returobat',
            'tambahanbiaya' => 'Tambahanbiaya',
            'potonganbiaya' => 'Potonganbiaya',
            'kamar' => 'Kamar',
            'reseppulang' => 'Reseppulang',
            'harianranap' => 'Harianranap',
            'registrasi' => 'Registrasi',
            'no_sep' => 'No Sep',
            'kd_rek' => 'Kd Rek',
            'kd_rek_kontra' => 'Kd Rek Kontra',
            'service' => 'Service',
            'ppn_obat' => 'Ppn Obat',
        ];
    }

    /**
     * Gets query for [[KdRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRek()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek']);
    }

    /**
     * Gets query for [[KdRekKontra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRekKontra()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'kd_rek_kontra']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
    }

    /**
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
