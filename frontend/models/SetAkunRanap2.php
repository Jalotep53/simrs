<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_ranap2".
 *
 * @property string $Persediaan_Obat_Kamar_Operasi_Ranap
 * @property string|null $Harian_Ranap
 * @property string|null $Uang_Muka_Ranap
 * @property string|null $Piutang_Pasien_Ranap
 * @property string $Sisa_Uang_Muka_Ranap
 *
 * @property Rekening $harianRanap
 * @property Rekening $persediaanObatKamarOperasiRanap
 * @property Rekening $piutangPasienRanap
 * @property Rekening $sisaUangMukaRanap
 * @property Rekening $uangMukaRanap
 */
class SetAkunRanap2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_ranap2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Persediaan_Obat_Kamar_Operasi_Ranap', 'Sisa_Uang_Muka_Ranap'], 'required'],
            [['Persediaan_Obat_Kamar_Operasi_Ranap', 'Harian_Ranap', 'Uang_Muka_Ranap', 'Piutang_Pasien_Ranap', 'Sisa_Uang_Muka_Ranap'], 'string', 'max' => 15],
            [['Persediaan_Obat_Kamar_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Obat_Kamar_Operasi_Ranap' => 'kd_rek']],
            [['Harian_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Harian_Ranap' => 'kd_rek']],
            [['Uang_Muka_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Uang_Muka_Ranap' => 'kd_rek']],
            [['Piutang_Pasien_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Piutang_Pasien_Ranap' => 'kd_rek']],
            [['Sisa_Uang_Muka_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Sisa_Uang_Muka_Ranap' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Persediaan_Obat_Kamar_Operasi_Ranap' => 'Persediaan Obat Kamar Operasi Ranap',
            'Harian_Ranap' => 'Harian Ranap',
            'Uang_Muka_Ranap' => 'Uang Muka Ranap',
            'Piutang_Pasien_Ranap' => 'Piutang Pasien Ranap',
            'Sisa_Uang_Muka_Ranap' => 'Sisa Uang Muka Ranap',
        ];
    }

    /**
     * Gets query for [[HarianRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHarianRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Harian_Ranap']);
    }

    /**
     * Gets query for [[PersediaanObatKamarOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanObatKamarOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Obat_Kamar_Operasi_Ranap']);
    }

    /**
     * Gets query for [[PiutangPasienRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPiutangPasienRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Piutang_Pasien_Ranap']);
    }

    /**
     * Gets query for [[SisaUangMukaRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSisaUangMukaRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Sisa_Uang_Muka_Ranap']);
    }

    /**
     * Gets query for [[UangMukaRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUangMukaRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Uang_Muka_Ranap']);
    }
}
