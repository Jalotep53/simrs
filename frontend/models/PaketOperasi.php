<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "paket_operasi".
 *
 * @property string $kode_paket
 * @property string $nm_perawatan
 * @property string|null $kategori
 * @property float $operator1
 * @property float $operator2
 * @property float $operator3
 * @property float|null $asisten_operator1
 * @property float $asisten_operator2
 * @property float|null $asisten_operator3
 * @property float|null $instrumen
 * @property float $dokter_anak
 * @property float $perawaat_resusitas
 * @property float $dokter_anestesi
 * @property float $asisten_anestesi
 * @property float|null $asisten_anestesi2
 * @property float $bidan
 * @property float|null $bidan2
 * @property float|null $bidan3
 * @property float $perawat_luar
 * @property float $sewa_ok
 * @property float $alat
 * @property float|null $akomodasi
 * @property float $bagian_rs
 * @property float $omloop
 * @property float|null $omloop2
 * @property float|null $omloop3
 * @property float|null $omloop4
 * @property float|null $omloop5
 * @property float|null $sarpras
 * @property float|null $dokter_pjanak
 * @property float|null $dokter_umum
 * @property string|null $kd_pj
 * @property string|null $status
 * @property string|null $kelas
 *
 * @property BayarOperasiDokterAnak[] $bayarOperasiDokterAnaks
 * @property BayarOperasiDokterAnestesi[] $bayarOperasiDokterAnestesis
 * @property BayarOperasiDokterPjanak[] $bayarOperasiDokterPjanaks
 * @property BayarOperasiDokterUmum[] $bayarOperasiDokterUmums
 * @property BayarOperasiOperator1[] $bayarOperasiOperator1s
 * @property BayarOperasiOperator2[] $bayarOperasiOperator2s
 * @property BayarOperasiOperator3[] $bayarOperasiOperator3s
 * @property BookingOperasi[] $bookingOperasis
 * @property InhealthTindakanOperasi $inhealthTindakanOperasi
 * @property Penjab $kdPj
 * @property Operasi[] $operasis
 */
class PaketOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paket_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_paket', 'nm_perawatan', 'operator1', 'operator2', 'operator3', 'asisten_operator2', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'bidan', 'perawat_luar', 'sewa_ok', 'alat', 'bagian_rs', 'omloop'], 'required'],
            [['kategori', 'status', 'kelas'], 'string'],
            [['operator1', 'operator2', 'operator3', 'asisten_operator1', 'asisten_operator2', 'asisten_operator3', 'instrumen', 'dokter_anak', 'perawaat_resusitas', 'dokter_anestesi', 'asisten_anestesi', 'asisten_anestesi2', 'bidan', 'bidan2', 'bidan3', 'perawat_luar', 'sewa_ok', 'alat', 'akomodasi', 'bagian_rs', 'omloop', 'omloop2', 'omloop3', 'omloop4', 'omloop5', 'sarpras', 'dokter_pjanak', 'dokter_umum'], 'number'],
            [['kode_paket'], 'string', 'max' => 15],
            [['nm_perawatan'], 'string', 'max' => 80],
            [['kd_pj'], 'string', 'max' => 3],
            [['kode_paket'], 'unique'],
            [['kd_pj'], 'exist', 'skipOnError' => true, 'targetClass' => Penjab::class, 'targetAttribute' => ['kd_pj' => 'kd_pj']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_paket' => 'Kode Paket',
            'nm_perawatan' => 'Nm Perawatan',
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
            'sewa_ok' => 'Sewa Ok',
            'alat' => 'Alat',
            'akomodasi' => 'Akomodasi',
            'bagian_rs' => 'Bagian Rs',
            'omloop' => 'Omloop',
            'omloop2' => 'Omloop2',
            'omloop3' => 'Omloop3',
            'omloop4' => 'Omloop4',
            'omloop5' => 'Omloop5',
            'sarpras' => 'Sarpras',
            'dokter_pjanak' => 'Dokter Pjanak',
            'dokter_umum' => 'Dokter Umum',
            'kd_pj' => 'Kd Pj',
            'status' => 'Status',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * Gets query for [[BayarOperasiDokterAnaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnaks()
    {
        return $this->hasMany(BayarOperasiDokterAnak::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiDokterAnestesis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterAnestesis()
    {
        return $this->hasMany(BayarOperasiDokterAnestesi::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiDokterPjanaks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterPjanaks()
    {
        return $this->hasMany(BayarOperasiDokterPjanak::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiDokterUmums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiDokterUmums()
    {
        return $this->hasMany(BayarOperasiDokterUmum::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiOperator1s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator1s()
    {
        return $this->hasMany(BayarOperasiOperator1::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiOperator2s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator2s()
    {
        return $this->hasMany(BayarOperasiOperator2::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BayarOperasiOperator3s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBayarOperasiOperator3s()
    {
        return $this->hasMany(BayarOperasiOperator3::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[BookingOperasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookingOperasis()
    {
        return $this->hasMany(BookingOperasi::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[InhealthTindakanOperasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInhealthTindakanOperasi()
    {
        return $this->hasOne(InhealthTindakanOperasi::class, ['kode_paket' => 'kode_paket']);
    }

    /**
     * Gets query for [[KdPj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPj()
    {
        return $this->hasOne(Penjab::class, ['kd_pj' => 'kd_pj']);
    }

    /**
     * Gets query for [[Operasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasis()
    {
        return $this->hasMany(Operasi::class, ['kode_paket' => 'kode_paket']);
    }
}
