<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien_polri".
 *
 * @property string $no_rkm_medis
 * @property int $golongan_polri
 * @property int $pangkat_polri
 * @property int $satuan_polri
 * @property int $jabatan_polri
 *
 * @property GolonganPolri $golonganPolri
 * @property JabatanPolri $jabatanPolri
 * @property Pasien $noRkmMedis
 * @property PangkatPolri $pangkatPolri
 * @property SatuanPolri $satuanPolri
 */
class PasienPolri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien_polri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rkm_medis', 'golongan_polri', 'pangkat_polri', 'satuan_polri', 'jabatan_polri'], 'required'],
            [['golongan_polri', 'pangkat_polri', 'satuan_polri', 'jabatan_polri'], 'integer'],
            [['no_rkm_medis'], 'string', 'max' => 15],
            [['no_rkm_medis'], 'unique'],
            [['no_rkm_medis'], 'exist', 'skipOnError' => true, 'targetClass' => Pasien::class, 'targetAttribute' => ['no_rkm_medis' => 'no_rkm_medis']],
            [['golongan_polri'], 'exist', 'skipOnError' => true, 'targetClass' => GolonganPolri::class, 'targetAttribute' => ['golongan_polri' => 'id']],
            [['pangkat_polri'], 'exist', 'skipOnError' => true, 'targetClass' => PangkatPolri::class, 'targetAttribute' => ['pangkat_polri' => 'id']],
            [['satuan_polri'], 'exist', 'skipOnError' => true, 'targetClass' => SatuanPolri::class, 'targetAttribute' => ['satuan_polri' => 'id']],
            [['jabatan_polri'], 'exist', 'skipOnError' => true, 'targetClass' => JabatanPolri::class, 'targetAttribute' => ['jabatan_polri' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rkm_medis' => 'No Rkm Medis',
            'golongan_polri' => 'Golongan Polri',
            'pangkat_polri' => 'Pangkat Polri',
            'satuan_polri' => 'Satuan Polri',
            'jabatan_polri' => 'Jabatan Polri',
        ];
    }

    /**
     * Gets query for [[GolonganPolri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGolonganPolri()
    {
        return $this->hasOne(GolonganPolri::class, ['id' => 'golongan_polri']);
    }

    /**
     * Gets query for [[JabatanPolri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatanPolri()
    {
        return $this->hasOne(JabatanPolri::class, ['id' => 'jabatan_polri']);
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
     * Gets query for [[PangkatPolri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPangkatPolri()
    {
        return $this->hasOne(PangkatPolri::class, ['id' => 'pangkat_polri']);
    }

    /**
     * Gets query for [[SatuanPolri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuanPolri()
    {
        return $this->hasOne(SatuanPolri::class, ['id' => 'satuan_polri']);
    }
}
