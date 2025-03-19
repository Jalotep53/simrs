<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bukti_persetujuan_transfer_pasien_antar_ruang".
 *
 * @property string $no_rawat
 * @property string|null $tanggal_masuk
 * @property string|null $photo
 *
 * @property RegPeriksa $noRawat
 */
class BuktiPersetujuanTransferPasienAntarRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_persetujuan_transfer_pasien_antar_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat'], 'required'],
            [['tanggal_masuk'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['photo'], 'string', 'max' => 500],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal_masuk' => 'Tanggal Masuk',
            'photo' => 'Photo',
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
