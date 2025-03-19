<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "operasi".
 *
 * @property string $no_rawat
 * @property string $tgl_operasi
 * @property string $jenis_anasthesi
 * @property string|null $kategori
 * @property string $operator1
 * @property string $operator2
 * @property string $operator3
 * @property string $asisten_operator1
 * @property string $asisten_operator2
 * @property string|null $asisten_operator3
 * @property string|null $instrumen
 * @property string $dokter_anak
 * @property string $perawaat_resusitas
 * @property string $dokter_anestesi
 * @property string $asisten_anestesi
 * @property string|null $asisten_anestesi2
 * @property string $bidan
 * @property string|null $bidan2
 * @property string|null $bidan3
 * @property string $perawat_luar
 * @property string|null $omloop
 * @property string|null $omloop2
 * @property string|null $omloop3
 * @property string|null $omloop4
 * @property string|null $omloop5
 * @property string|null $dokter_pjanak
 * @property string|null $dokter_umum
 * @property string $kode_paket
 * @property float $biayaoperator1
 * @property float $biayaoperator2
 * @property float $biayaoperator3
 * @property float $biayaasisten_operator1
 * @property float $biayaasisten_operator2
 * @property float|null $biayaasisten_operator3
 * @property float|null $biayainstrumen
 * @property float $biayadokter_anak
 * @property float $biayaperawaat_resusitas
 * @property float $biayadokter_anestesi
 * @property float $biayaasisten_anestesi
 * @property float|null $biayaasisten_anestesi2
 * @property float $biayabidan
 * @property float|null $biayabidan2
 * @property float|null $biayabidan3
 * @property float $biayaperawat_luar
 * @property float $biayaalat
 * @property float $biayasewaok
 * @property float|null $akomodasi
 * @property float $bagian_rs
 * @property float|null $biaya_omloop
 * @property float|null $biaya_omloop2
 * @property float|null $biaya_omloop3
 * @property float|null $biaya_omloop4
 * @property float|null $biaya_omloop5
 * @property float|null $biayasarpras
 * @property float|null $biaya_dokter_pjanak
 * @property float|null $biaya_dokter_umum
 * @property string|null $status
 *
 * @property Petugas $asistenAnestesi
 * @property Petugas $asistenAnestesi2
 * @property Petugas $asistenOperator1
 * @property Petugas $asistenOperator2
 * @property Petugas $asistenOperator3
 * @property Petugas $bidan0
 * @property Petugas $bidan20
 * @property Petugas $bidan30
 * @property Dokter $dokterAnak
 * @property Dokter $dokterAnestesi
 * @property Dokter $dokterPjanak
 * @property Dokter $dokterUmum
 * @property Petugas $instrumen0
 * @property PaketOperasi $kodePaket
 * @property RegPeriksa $noRawat
 * @property Petugas $omloop0
 * @property Petugas $omloop20
 * @property Petugas $omloop30
 * @property Petugas $omloop40
 * @property Petugas $omloop50
 * @property Dokter $operator10
 * @property Dokter $operator20
 * @property Dokter $operator30
 * @property Petugas $perawaatResusitas
 * @property Petugas $perawatLuar
 */
class Operasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_operasi', 'jenis_anasthesi', 'operator1', 'operator2', 'operator3', 'asisten_operator1', 'asisten_operator2', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'bidan', 'perawat_luar', 'kode_paket', 'biayaoperator1', 'biayaoperator2', 'biayaoperator3', 'biayaasisten_operator1', 'biayaasisten_operator2', 'biayadokter_anak', 'biayaperawaat_resusitas', 'biayadokter_anestesi', 'biayaasisten_anestesi', 'biayabidan', 'biayaperawat_luar', 'biayaalat', 'biayasewaok', 'bagian_rs'], 'required'],
            [['tgl_operasi'], 'safe'],
            [['kategori', 'status'], 'string'],
            [['biayaoperator1', 'biayaoperator2', 'biayaoperator3', 'biayaasisten_operator1', 'biayaasisten_operator2', 'biayaasisten_operator3', 'biayainstrumen', 'biayadokter_anak', 'biayaperawaat_resusitas', 'biayadokter_anestesi', 'biayaasisten_anestesi', 'biayaasisten_anestesi2', 'biayabidan', 'biayabidan2', 'biayabidan3', 'biayaperawat_luar', 'biayaalat', 'biayasewaok', 'akomodasi', 'bagian_rs', 'biaya_omloop', 'biaya_omloop2', 'biaya_omloop3', 'biaya_omloop4', 'biaya_omloop5', 'biayasarpras', 'biaya_dokter_pjanak', 'biaya_dokter_umum'], 'number'],
            [['no_rawat'], 'string', 'max' => 17],
            [['jenis_anasthesi'], 'string', 'max' => 8],
            [['operator1', 'operator2', 'operator3', 'asisten_operator1', 'asisten_operator2', 'asisten_operator3', 'instrumen', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'asisten_anestesi2', 'bidan', 'bidan2', 'bidan3', 'perawat_luar', 'omloop', 'omloop2', 'omloop3', 'omloop4', 'omloop5', 'dokter_pjanak', 'dokter_umum'], 'string', 'max' => 20],
            [['kode_paket'], 'string', 'max' => 15],
            [['no_rawat', 'tgl_operasi', 'kode_paket'], 'unique', 'targetAttribute' => ['no_rawat', 'tgl_operasi', 'kode_paket']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['operator1'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['operator1' => 'kd_dokter']],
            [['operator2'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['operator2' => 'kd_dokter']],
            [['operator3'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['operator3' => 'kd_dokter']],
            [['asisten_operator1'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_operator1' => 'nip']],
            [['asisten_operator2'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_operator2' => 'nip']],
            [['instrumen'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['instrumen' => 'nip']],
            [['dokter_anak'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_anak' => 'kd_dokter']],
            [['perawaat_resusitas'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['perawaat_resusitas' => 'nip']],
            [['dokter_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_anestesi' => 'kd_dokter']],
            [['asisten_anestesi'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_anestesi' => 'nip']],
            [['bidan'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['bidan' => 'nip']],
            [['perawat_luar'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['perawat_luar' => 'nip']],
            [['kode_paket'], 'exist', 'skipOnError' => true, 'targetClass' => PaketOperasi::class, 'targetAttribute' => ['kode_paket' => 'kode_paket']],
            [['bidan2'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['bidan2' => 'nip']],
            [['bidan3'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['bidan3' => 'nip']],
            [['omloop'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['omloop' => 'nip']],
            [['omloop2'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['omloop2' => 'nip']],
            [['omloop3'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['omloop3' => 'nip']],
            [['dokter_pjanak'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_pjanak' => 'kd_dokter']],
            [['dokter_umum'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['dokter_umum' => 'kd_dokter']],
            [['asisten_operator3'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_operator3' => 'nip']],
            [['asisten_anestesi2'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['asisten_anestesi2' => 'nip']],
            [['omloop4'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['omloop4' => 'nip']],
            [['omloop5'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['omloop5' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_operasi' => 'Tgl Operasi',
            'jenis_anasthesi' => 'Jenis Anasthesi',
            'kategori' => 'Kategori',
            'operator1' => 'Operator1',
            'operator2' => 'Operator2',
            'operator3' => 'Operator3',
            'asisten_operator1' => 'Asisten Operator1',
            'asisten_operator2' => 'Asisten Operator2',
            'asisten_operator3' => 'Asisten Operator3',
            'instrumen' => 'Instrumen',
            'dokter_anak' => 'Dokter Anak',
            'perawaat_resusitas' => 'Perawaat Resusitas',
            'dokter_anestesi' => 'Dokter Anestesi',
            'asisten_anestesi' => 'Asisten Anestesi',
            'asisten_anestesi2' => 'Asisten Anestesi2',
            'bidan' => 'Bidan',
            'bidan2' => 'Bidan2',
            'bidan3' => 'Bidan3',
            'perawat_luar' => 'Perawat Luar',
            'omloop' => 'Omloop',
            'omloop2' => 'Omloop2',
            'omloop3' => 'Omloop3',
            'omloop4' => 'Omloop4',
            'omloop5' => 'Omloop5',
            'dokter_pjanak' => 'Dokter Pjanak',
            'dokter_umum' => 'Dokter Umum',
            'kode_paket' => 'Kode Paket',
            'biayaoperator1' => 'Biayaoperator1',
            'biayaoperator2' => 'Biayaoperator2',
            'biayaoperator3' => 'Biayaoperator3',
            'biayaasisten_operator1' => 'Biayaasisten Operator1',
            'biayaasisten_operator2' => 'Biayaasisten Operator2',
            'biayaasisten_operator3' => 'Biayaasisten Operator3',
            'biayainstrumen' => 'Biayainstrumen',
            'biayadokter_anak' => 'Biayadokter Anak',
            'biayaperawaat_resusitas' => 'Biayaperawaat Resusitas',
            'biayadokter_anestesi' => 'Biayadokter Anestesi',
            'biayaasisten_anestesi' => 'Biayaasisten Anestesi',
            'biayaasisten_anestesi2' => 'Biayaasisten Anestesi2',
            'biayabidan' => 'Biayabidan',
            'biayabidan2' => 'Biayabidan2',
            'biayabidan3' => 'Biayabidan3',
            'biayaperawat_luar' => 'Biayaperawat Luar',
            'biayaalat' => 'Biayaalat',
            'biayasewaok' => 'Biayasewaok',
            'akomodasi' => 'Akomodasi',
            'bagian_rs' => 'Bagian Rs',
            'biaya_omloop' => 'Biaya Omloop',
            'biaya_omloop2' => 'Biaya Omloop2',
            'biaya_omloop3' => 'Biaya Omloop3',
            'biaya_omloop4' => 'Biaya Omloop4',
            'biaya_omloop5' => 'Biaya Omloop5',
            'biayasarpras' => 'Biayasarpras',
            'biaya_dokter_pjanak' => 'Biaya Dokter Pjanak',
            'biaya_dokter_umum' => 'Biaya Dokter Umum',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[AsistenAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenAnestesi()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_anestesi']);
    }

    /**
     * Gets query for [[AsistenAnestesi2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenAnestesi2()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_anestesi2']);
    }

    /**
     * Gets query for [[AsistenOperator1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenOperator1()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_operator1']);
    }

    /**
     * Gets query for [[AsistenOperator2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenOperator2()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_operator2']);
    }

    /**
     * Gets query for [[AsistenOperator3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsistenOperator3()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'asisten_operator3']);
    }

    /**
     * Gets query for [[Bidan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidan0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'bidan']);
    }

    /**
     * Gets query for [[Bidan20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidan20()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'bidan2']);
    }

    /**
     * Gets query for [[Bidan30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBidan30()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'bidan3']);
    }

    /**
     * Gets query for [[DokterAnak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterAnak()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_anak']);
    }

    /**
     * Gets query for [[DokterAnestesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterAnestesi()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_anestesi']);
    }

    /**
     * Gets query for [[DokterPjanak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterPjanak()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_pjanak']);
    }

    /**
     * Gets query for [[DokterUmum]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokterUmum()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'dokter_umum']);
    }

    /**
     * Gets query for [[Instrumen0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstrumen0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'instrumen']);
    }

    /**
     * Gets query for [[KodePaket]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodePaket()
    {
        return $this->hasOne(PaketOperasi::class, ['kode_paket' => 'kode_paket']);
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

    /**
     * Gets query for [[Omloop0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOmloop0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'omloop']);
    }

    /**
     * Gets query for [[Omloop20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOmloop20()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'omloop2']);
    }

    /**
     * Gets query for [[Omloop30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOmloop30()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'omloop3']);
    }

    /**
     * Gets query for [[Omloop40]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOmloop40()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'omloop4']);
    }

    /**
     * Gets query for [[Omloop50]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOmloop50()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'omloop5']);
    }

    /**
     * Gets query for [[Operator10]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator10()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'operator1']);
    }

    /**
     * Gets query for [[Operator20]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator20()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'operator2']);
    }

    /**
     * Gets query for [[Operator30]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperator30()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'operator3']);
    }

    /**
     * Gets query for [[PerawaatResusitas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerawaatResusitas()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'perawaat_resusitas']);
    }

    /**
     * Gets query for [[PerawatLuar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerawatLuar()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'perawat_luar']);
    }
}
