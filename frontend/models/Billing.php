<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "billing".
 *
 * @property int $noindex
 * @property string $no_rawat
 * @property string|null $tgl_byr
 * @property string $no
 * @property string $nm_perawatan
 * @property string $pemisah
 * @property float $biaya
 * @property float $jumlah
 * @property float $tambahan
 * @property float $totalbiaya
 * @property string|null $status
 *
 * @property RegPeriksa $noRawat
 */
class Billing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noindex', 'no_rawat', 'no', 'nm_perawatan', 'pemisah', 'biaya', 'jumlah', 'tambahan', 'totalbiaya'], 'required'],
            [['noindex'], 'integer'],
            [['tgl_byr'], 'safe'],
            [['biaya', 'jumlah', 'tambahan', 'totalbiaya'], 'number'],
            [['status'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['no'], 'string', 'max' => 50],
            [['nm_perawatan'], 'string', 'max' => 200],
            [['pemisah'], 'string', 'max' => 1],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'noindex' => 'Noindex',
            'no_rawat' => 'No Rawat',
            'tgl_byr' => 'Tgl Byr',
            'no' => 'No',
            'nm_perawatan' => 'Nm Perawatan',
            'pemisah' => 'Pemisah',
            'biaya' => 'Biaya',
            'jumlah' => 'Jumlah',
            'tambahan' => 'Tambahan',
            'totalbiaya' => 'Totalbiaya',
            'status' => 'Status',
        ];
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
