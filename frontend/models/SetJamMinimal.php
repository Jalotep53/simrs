<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_jam_minimal".
 *
 * @property int $lamajam
 * @property string $hariawal
 * @property float $feeperujuk
 * @property string|null $diagnosaakhir
 * @property int|null $bayi
 * @property string|null $aktifkan_hapus_data_salah
 * @property string|null $kamar_inap_kasir_ralan
 * @property string $ubah_status_kamar
 */
class SetJamMinimal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_jam_minimal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lamajam', 'hariawal', 'feeperujuk', 'ubah_status_kamar'], 'required'],
            [['lamajam', 'bayi'], 'integer'],
            [['hariawal', 'diagnosaakhir', 'aktifkan_hapus_data_salah', 'kamar_inap_kasir_ralan', 'ubah_status_kamar'], 'string'],
            [['feeperujuk'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lamajam' => 'Lamajam',
            'hariawal' => 'Hariawal',
            'feeperujuk' => 'Feeperujuk',
            'diagnosaakhir' => 'Diagnosaakhir',
            'bayi' => 'Bayi',
            'aktifkan_hapus_data_salah' => 'Aktifkan Hapus Data Salah',
            'kamar_inap_kasir_ralan' => 'Kamar Inap Kasir Ralan',
            'ubah_status_kamar' => 'Ubah Status Kamar',
        ];
    }
}
