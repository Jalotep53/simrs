<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tagihan_briva".
 *
 * @property string|null $no_rkm_medis
 * @property string|null $nm_pasien
 * @property string|null $alamat
 * @property string|null $jk
 * @property string $tgl_lahir
 * @property string|null $tgl_registrasi
 * @property string $no_tagihan
 * @property float|null $besar_bayar
 * @property string|null $keterangan
 * @property string $status_tagihan
 * @property string|null $tgl_closing
 * @property string|null $status_bayar
 * @property string|null $kasir
 * @property string|null $diupdatebank
 * @property string $referensi
 *
 * @property Pasien $noRkmMedis
 */
class TagihanBriva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan_briva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jk', 'status_tagihan', 'status_bayar'], 'string'],
            [['tgl_lahir', 'no_tagihan', 'status_tagihan', 'referensi'], 'required'],
            [['tgl_lahir', 'tgl_registrasi', 'tgl_closing', 'diupdatebank'], 'safe'],
            [['besar_bayar'], 'number'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['nm_pasien'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 200],
            [['no_tagihan'], 'string', 'max' => 17],
            [['keterangan'], 'string', 'max' => 255],
            [['kasir'], 'string', 'max' => 50],
            [['referensi'], 'string', 'max' => 30],
            [['no_tagihan', 'status_tagihan'], 'unique', 'targetAttribute' => ['no_tagihan', 'status_tagihan']],
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
            'tgl_registrasi' => 'Tgl Registrasi',
            'no_tagihan' => 'No Tagihan',
            'besar_bayar' => 'Besar Bayar',
            'keterangan' => 'Keterangan',
            'status_tagihan' => 'Status Tagihan',
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
