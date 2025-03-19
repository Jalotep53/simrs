<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengajuan_biaya_disetujui".
 *
 * @property string $no_pengajuan
 * @property float $jumlah
 * @property float $harga
 * @property float $total
 *
 * @property PengajuanBiaya $noPengajuan
 */
class PengajuanBiayaDisetujui extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengajuan_biaya_disetujui';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pengajuan', 'jumlah', 'harga', 'total'], 'required'],
            [['jumlah', 'harga', 'total'], 'number'],
            [['no_pengajuan'], 'string', 'max' => 20],
            [['no_pengajuan'], 'unique'],
            [['no_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => PengajuanBiaya::class, 'targetAttribute' => ['no_pengajuan' => 'no_pengajuan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pengajuan' => 'No Pengajuan',
            'jumlah' => 'Jumlah',
            'harga' => 'Harga',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[NoPengajuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPengajuan()
    {
        return $this->hasOne(PengajuanBiaya::class, ['no_pengajuan' => 'no_pengajuan']);
    }
}
