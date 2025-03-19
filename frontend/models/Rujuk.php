<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rujuk".
 *
 * @property string $no_rujuk
 * @property string|null $no_rawat
 * @property string|null $rujuk_ke
 * @property string|null $tgl_rujuk
 * @property string|null $keterangan_diagnosa
 * @property string|null $kd_dokter
 * @property string|null $kat_rujuk
 * @property string|null $ambulance
 * @property string|null $keterangan
 * @property string|null $jam
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class Rujuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rujuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rujuk'], 'required'],
            [['tgl_rujuk', 'jam'], 'safe'],
            [['keterangan_diagnosa', 'kat_rujuk', 'ambulance', 'keterangan'], 'string'],
            [['no_rujuk'], 'string', 'max' => 40],
            [['no_rawat'], 'string', 'max' => 17],
            [['rujuk_ke'], 'string', 'max' => 150],
            [['kd_dokter'], 'string', 'max' => 20],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rujuk' => 'No Rujuk',
            'no_rawat' => 'No Rawat',
            'rujuk_ke' => 'Rujuk Ke',
            'tgl_rujuk' => 'Tgl Rujuk',
            'keterangan_diagnosa' => 'Keterangan Diagnosa',
            'kd_dokter' => 'Kd Dokter',
            'kat_rujuk' => 'Kat Rujuk',
            'ambulance' => 'Ambulance',
            'keterangan' => 'Keterangan',
            'jam' => 'Jam',
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
