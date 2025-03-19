<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "icd9".
 *
 * @property string $kode
 * @property string|null $deskripsi_panjang
 * @property string|null $deskripsi_pendek
 *
 * @property TemplatePemeriksaanDokter[] $noTemplates
 * @property ProsedurPasien[] $prosedurPasiens
 * @property SatuSehatProcedure[] $satuSehatProcedures
 * @property TemplatePemeriksaanDokterProsedur[] $templatePemeriksaanDokterProsedurs
 */
class Icd9 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icd9';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode'], 'required'],
            [['kode'], 'string', 'max' => 8],
            [['deskripsi_panjang'], 'string', 'max' => 250],
            [['deskripsi_pendek'], 'string', 'max' => 40],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'deskripsi_panjang' => 'Deskripsi Panjang',
            'deskripsi_pendek' => 'Deskripsi Pendek',
        ];
    }

    /**
     * Gets query for [[NoTemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoTemplates()
    {
        return $this->hasMany(TemplatePemeriksaanDokter::class, ['no_template' => 'no_template'])->viaTable('template_pemeriksaan_dokter_prosedur', ['kode' => 'kode']);
    }

    /**
     * Gets query for [[ProsedurPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProsedurPasiens()
    {
        return $this->hasMany(ProsedurPasien::class, ['kode' => 'kode']);
    }

    /**
     * Gets query for [[SatuSehatProcedures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSatuSehatProcedures()
    {
        return $this->hasMany(SatuSehatProcedure::class, ['kode' => 'kode']);
    }

    /**
     * Gets query for [[TemplatePemeriksaanDokterProsedurs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemplatePemeriksaanDokterProsedurs()
    {
        return $this->hasMany(TemplatePemeriksaanDokterProsedur::class, ['kode' => 'kode']);
    }
}
