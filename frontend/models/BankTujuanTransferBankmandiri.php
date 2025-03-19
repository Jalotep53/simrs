<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bank_tujuan_transfer_bankmandiri".
 *
 * @property string $kode_bank
 * @property string|null $nama_bank
 *
 * @property MetodePembayaranBankmandiri[] $kodeMetodes
 * @property KodetransaksiTujuanTransferBankmandiri[] $kodetransaksiTujuanTransferBankmandiris
 * @property PembayaranPihakKe3Bankmandiri[] $pembayaranPihakKe3Bankmandiris
 */
class BankTujuanTransferBankmandiri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_tujuan_transfer_bankmandiri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_bank'], 'required'],
            [['kode_bank'], 'string', 'max' => 10],
            [['nama_bank'], 'string', 'max' => 60],
            [['kode_bank'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_bank' => 'Kode Bank',
            'nama_bank' => 'Nama Bank',
        ];
    }

    /**
     * Gets query for [[KodeMetodes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMetodes()
    {
        return $this->hasMany(MetodePembayaranBankmandiri::class, ['kode_metode' => 'kode_metode'])->viaTable('kodetransaksi_tujuan_transfer_bankmandiri', ['kode_bank' => 'kode_bank']);
    }

    /**
     * Gets query for [[KodetransaksiTujuanTransferBankmandiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodetransaksiTujuanTransferBankmandiris()
    {
        return $this->hasMany(KodetransaksiTujuanTransferBankmandiri::class, ['kode_bank' => 'kode_bank']);
    }

    /**
     * Gets query for [[PembayaranPihakKe3Bankmandiris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayaranPihakKe3Bankmandiris()
    {
        return $this->hasMany(PembayaranPihakKe3Bankmandiri::class, ['kode_bank' => 'kode_bank']);
    }
}
