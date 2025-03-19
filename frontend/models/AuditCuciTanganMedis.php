<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_cuci_tangan_medis".
 *
 * @property string $tanggal
 * @property string $nik
 * @property string|null $sebelum_menyentuh_pasien
 * @property string|null $sebelum_tehnik_aseptik
 * @property string|null $setelah_terpapar_cairan_tubuh_pasien
 * @property string|null $setelah_kontak_dengan_pasien
 * @property string|null $setelah_kontak_dengan_lingkungan_pasien
 *
 * @property Pegawai $nik0
 */
class AuditCuciTanganMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_cuci_tangan_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nik'], 'required'],
            [['tanggal'], 'safe'],
            [['sebelum_menyentuh_pasien', 'sebelum_tehnik_aseptik', 'setelah_terpapar_cairan_tubuh_pasien', 'setelah_kontak_dengan_pasien', 'setelah_kontak_dengan_lingkungan_pasien'], 'string'],
            [['nik'], 'string', 'max' => 20],
            [['tanggal', 'nik'], 'unique', 'targetAttribute' => ['tanggal', 'nik']],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nik' => 'nik']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'nik' => 'Nik',
            'sebelum_menyentuh_pasien' => 'Sebelum Menyentuh Pasien',
            'sebelum_tehnik_aseptik' => 'Sebelum Tehnik Aseptik',
            'setelah_terpapar_cairan_tubuh_pasien' => 'Setelah Terpapar Cairan Tubuh Pasien',
            'setelah_kontak_dengan_pasien' => 'Setelah Kontak Dengan Pasien',
            'setelah_kontak_dengan_lingkungan_pasien' => 'Setelah Kontak Dengan Lingkungan Pasien',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nik']);
    }
}
