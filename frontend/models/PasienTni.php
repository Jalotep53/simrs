<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien_tni".
 *
 * @property string $no_rkm_medis
 * @property int $golongan_tni
 * @property int $pangkat_tni
 * @property int $satuan_tni
 * @property int $jabatan_tni
 *
 * @property GolonganTni $golonganTni
 * @property JabatanTni $jabatanTni
 * @property Pasien $noRkmMedis
 * @property PangkatTni $pangkatTni
 * @property SatuanTni $satuanTni
 */
class PasienTni extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_tni';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'golongan_tni', 'pangkat_tni', 'satuan_tni', 'jabatan_tni'], 'required'],
            [['golongan_tni', 'pangkat_tni', 'satuan_tni', 'jabatan_tni'], 'integer'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['golongan_tni'], 'exist', 'skipOnError' => true, 'targetClass' => GolonganTni::class, 'targetAttribute' => ['golongan_tni' => 'id']],
            [['pangkat_tni'], 'exist', 'skipOnError' => true, 'targetClass' => PangkatTni::class, 'targetAttribute' => ['pangkat_tni' => 'id']],
            [['satuan_tni'], 'exist', 'skipOnError' => true, 'targetClass' => SatuanTni::class, 'targetAttribute' => ['satuan_tni' => 'id']],
            [['jabatan_tni'], 'exist', 'skipOnError' => true, 'targetClass' => JabatanTni::class, 'targetAttribute' => ['jabatan_tni' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'golongan_tni' => 'Golongan Tni',
            'pangkat_tni' => 'Pangkat Tni',
            'satuan_tni' => 'Satuan Tni',
            'jabatan_tni' => 'Jabatan Tni',
        ];
    }

    /**
     * Gets query for [[GolonganTni]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGolonganTni()
    {
        return $this->hasOne(GolonganTni::class, ['id' => 'golongan_tni']);
    }

    /**
     * Gets query for [[JabatanTni]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanTni()
    {
        return $this->hasOne(JabatanTni::class, ['id' => 'jabatan_tni']);
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

    /**
     * Gets query for [[PangkatTni]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPangkatTni()
    {
        return $this->hasOne(PangkatTni::class, ['id' => 'pangkat_tni']);
    }

    /**
     * Gets query for [[SatuanTni]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuanTni()
    {
        return $this->hasOne(SatuanTni::class, ['id' => 'satuan_tni']);
    }
}
