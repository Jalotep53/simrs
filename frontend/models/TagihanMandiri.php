<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_mandiri".
 *
 * @property string|null $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $alamat
 * @property string|null $jk
 * @property string $tgl_lahir
 * @property string|null $umurdaftar
 * @property string|null $tgl_registrasi
 * @property string $no_nota
 * @property float|null $besar_bayar
 * @property string|null $no_rawat
 * @property string $no_id
 * @property string|null $status_lanjut
 * @property string|null $tgl_closing
 * @property string|null $status_bayar
 * @property string|null $pembatalan
 * @property string|null $dibatalkan_oleh
 * @property float|null $besar_batal
 * @property string|null $kasir
 * @property string|null $tambahan1
 * @property string|null $tambahan2
 * @property string|null $tambahan3
 * @property string|null $diupdatebank
 * @property string $referensi
 *
 * @property Pasien $noRkmMedis
 */
class TagihanMandiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_mandiri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jk', 'status_lanjut', 'status_bayar', 'pembatalan', 'dibatalkan_oleh'], 'string'],
            [['tgl_lahir', 'no_nota', 'no_id', 'referensi'], 'required'],
            [['tgl_lahir', 'tgl_registrasi', 'tgl_closing', 'diupdatebank'], 'safe'],
            [['besar_bayar', 'besar_batal'], 'number'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nm_pasien'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 200],
            [['umurdaftar'], 'string', 'max' => 7],
            [['no_nota', 'no_rawat', 'no_id'], 'string', 'max' => 17],
            [['kasir'], 'string', 'max' => 50],
            [['tambahan1', 'tambahan2', 'tambahan3'], 'string', 'max' => 75],
            [['referensi'], 'string', 'max' => 30],
            [['no_nota'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'nm_pasien' => 'Nm Pasien',
            'alamat' => 'Alamat',
            'jk' => 'Jk',
            'tgl_lahir' => 'Tgl Lahir',
            'umurdaftar' => 'Umurdaftar',
            'tgl_registrasi' => 'Tgl Registrasi',
            'no_nota' => 'No Nota',
            'besar_bayar' => 'Besar Bayar',
            'no_rawat' => 'No Rawat',
            'no_id' => 'No ID',
            'status_lanjut' => 'Status Lanjut',
            'tgl_closing' => 'Tgl Closing',
            'status_bayar' => 'Status Bayar',
            'pembatalan' => 'Pembatalan',
            'dibatalkan_oleh' => 'Dibatalkan Oleh',
            'besar_batal' => 'Besar Batal',
            'kasir' => 'Kasir',
            'tambahan1' => 'Tambahan1',
            'tambahan2' => 'Tambahan2',
            'tambahan3' => 'Tambahan3',
            'diupdatebank' => 'Diupdatebank',
            'referensi' => 'Referensi',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasOne(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis']);
    }
}
