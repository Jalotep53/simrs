<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kesling_limbah_b3medis_cair".
 *
 * @property string $nip
 * @property string $tanggal
 * @property float|null $jmllimbah
 * @property string|null $tujuan_penyerahan
 * @property string|null $bukti_dokumen
 * @property float|null $sisa_di_tps
 * @property string $keterangan
 *
 * @property Petugas $nip0
 */
class KeslingLimbahB3medisCair extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kesling_limbah_b3medis_cair';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tanggal', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            [['jmllimbah', 'sisa_di_tps'], 'number'],
            [['nip', 'bukti_dokumen'], 'string', 'max' => 20],
            [['tujuan_penyerahan'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 60],
            [['nip', 'tanggal'], 'unique', 'targetAttribute' => ['nip', 'tanggal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'jmllimbah' => 'Jmllimbah',
            'tujuan_penyerahan' => 'Tujuan Penyerahan',
            'bukti_dokumen' => 'Bukti Dokumen',
            'sisa_di_tps' => 'Sisa Di Tps',
            'keterangan' => 'Keterangan',
        ];
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
}
