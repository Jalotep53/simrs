<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_bpd_jabar".
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
 * @property string|null $keterangan
 * @property string|null $no_rawat
 * @property string|null $status_lanjut
 * @property string|null $tgl_closing
 * @property string|null $status_bayar
 * @property string|null $kasir
 * @property string|null $diupdatebank
 * @property string $referensi
 *
 * @property Pasien $noRkmMedis
 */
class TagihanBpdJabar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_bpd_jabar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jk', 'status_lanjut', 'status_bayar'], 'string'],
            [['tgl_lahir', 'no_nota', 'referensi'], 'required'],
            [['tgl_lahir', 'tgl_registrasi', 'tgl_closing', 'diupdatebank'], 'safe'],
            [['besar_bayar'], 'number'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nm_pasien'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 200],
            [['umurdaftar'], 'string', 'max' => 7],
            [['no_nota', 'no_rawat'], 'string', 'max' => 17],
            [['keterangan'], 'string', 'max' => 255],
            [['kasir'], 'string', 'max' => 50],
            [['referensi'], 'string', 'max' => 30],
            [['keterangan'], 'unique'],
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
            'keterangan' => 'Keterangan',
            'no_rawat' => 'No Rawat',
            'status_lanjut' => 'Status Lanjut',
            'tgl_closing' => 'Tgl Closing',
            'status_bayar' => 'Status Bayar',
            'kasir' => 'Kasir',
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
