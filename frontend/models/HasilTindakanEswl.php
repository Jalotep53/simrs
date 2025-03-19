<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hasil_tindakan_eswl".
 *
 * @property string $no_rawat
 * @property string $mulai
 * @property string $selesai
 * @property string $kd_dokter
 * @property string $nip
 * @property string $diagnosa
 * @property string $tindakan
 * @property string $obat_analgesik
 * @property string $obat_lain
 * @property string $uraian_tindakan
 * @property string $uraian_tindakan_focus
 * @property string $uraian_tindakan_rate
 * @property string $uraian_tindakan_power
 * @property string $uraian_tindakan_shock
 * @property string $diintegrasi
 * @property string $kekurangan
 * @property string $anjungan
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class HasilTindakanEswl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_tindakan_eswl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'mulai', 'selesai', 'kd_dokter', 'nip', 'diagnosa', 'tindakan', 'obat_analgesik', 'obat_lain', 'uraian_tindakan', 'uraian_tindakan_focus', 'uraian_tindakan_rate', 'uraian_tindakan_power', 'uraian_tindakan_shock', 'diintegrasi', 'kekurangan', 'anjungan'], 'required'],
            [['mulai', 'selesai'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter', 'nip'], 'string', 'max' => 20],
            [['diagnosa', 'tindakan', 'uraian_tindakan_focus', 'uraian_tindakan_rate', 'uraian_tindakan_power', 'uraian_tindakan_shock', 'diintegrasi', 'kekurangan', 'anjungan'], 'string', 'max' => 50],
            [['obat_analgesik', 'obat_lain'], 'string', 'max' => 150],
            [['uraian_tindakan'], 'string', 'max' => 300],
            [['no_rawat', 'mulai'], 'unique', 'targetAttribute' => ['no_rawat', 'mulai']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'mulai' => 'Mulai',
            'selesai' => 'Selesai',
            'kd_dokter' => 'Kd Dokter',
            'nip' => 'Nip',
            'diagnosa' => 'Diagnosa',
            'tindakan' => 'Tindakan',
            'obat_analgesik' => 'Obat Analgesik',
            'obat_lain' => 'Obat Lain',
            'uraian_tindakan' => 'Uraian Tindakan',
            'uraian_tindakan_focus' => 'Uraian Tindakan Focus',
            'uraian_tindakan_rate' => 'Uraian Tindakan Rate',
            'uraian_tindakan_power' => 'Uraian Tindakan Power',
            'uraian_tindakan_shock' => 'Uraian Tindakan Shock',
            'diintegrasi' => 'Diintegrasi',
            'kekurangan' => 'Kekurangan',
            'anjungan' => 'Anjungan',
        ];
    }

    /**
     * Gets query for [[KdDokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdDokter()
    {
        return $this->hasOne(Dokter::class, ['kd_dokter' => 'kd_dokter']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Petugas::class, ['nip' => 'nip']);
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
