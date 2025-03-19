<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_periksa_labpa".
 *
 * @property string $no_rawat
 * @property string $kd_jenis_prw
 * @property string $tgl_periksa
 * @property string $jam
 * @property string|null $diagnosa_klinik
 * @property string|null $makroskopik
 * @property string|null $mikroskopik
 * @property string|null $kesimpulan
 * @property string|null $kesan
 *
 * @property JnsPerawatanLab $kdJenisPrw
 * @property RegPeriksa $noRawat
 */
class DetailPeriksaLabpa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_periksa_labpa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'required'],
            [['tgl_periksa', 'jam'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_jenis_prw'], 'string', 'max' => 15],
            [['diagnosa_klinik'], 'string', 'max' => 50],
            [['makroskopik', 'mikroskopik'], 'string', 'max' => 1024],
            [['kesimpulan', 'kesan'], 'string', 'max' => 300],
            [['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam'], 'unique', 'targetAttribute' => ['no_rawat', 'kd_jenis_prw', 'tgl_periksa', 'jam']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_jenis_prw'], 'exist', 'skipOnError' => true, 'targetClass' => JnsPerawatanLab::class, 'targetAttribute' => ['kd_jenis_prw' => 'kd_jenis_prw']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'kd_jenis_prw' => 'Kd Jenis Prw',
            'tgl_periksa' => 'Tgl Periksa',
            'jam' => 'Jam',
            'diagnosa_klinik' => 'Diagnosa Klinik',
            'makroskopik' => 'Makroskopik',
            'mikroskopik' => 'Mikroskopik',
            'kesimpulan' => 'Kesimpulan',
            'kesan' => 'Kesan',
        ];
    }

    /**
     * Gets query for [[KdJenisPrw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdJenisPrw()
    {
        return $this->hasOne(JnsPerawatanLab::class, ['kd_jenis_prw' => 'kd_jenis_prw']);
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
