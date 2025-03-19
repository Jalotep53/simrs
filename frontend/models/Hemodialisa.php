<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hemodialisa".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $kd_dokter
 * @property string|null $lama
 * @property string|null $akses
 * @property string|null $dialist
 * @property string|null $transfusi
 * @property string|null $penarikan
 * @property string|null $qb
 * @property string|null $qd
 * @property string|null $ureum
 * @property string|null $hb
 * @property string|null $hbsag
 * @property string|null $creatinin
 * @property string|null $hiv
 * @property string|null $hcv
 * @property string|null $lain
 * @property string|null $kd_penyakit
 *
 * @property Dokter $kdDokter
 * @property Penyakit $kdPenyakit
 * @property RegPeriksa $noRawat
 */
class Hemodialisa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hemodialisa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['lama', 'transfusi', 'penarikan', 'qb', 'qd'], 'string', 'max' => 5],
            [['akses', 'dialist'], 'string', 'max' => 30],
            [['ureum', 'hb', 'hbsag', 'creatinin', 'hiv', 'hcv'], 'string', 'max' => 10],
            [['lain'], 'string', 'max' => 200],
            [['kd_penyakit'], 'string', 'max' => 15],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_penyakit'], 'exist', 'skipOnError' => true, 'targetClass' => Penyakit::class, 'targetAttribute' => ['kd_penyakit' => 'kd_penyakit']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'lama' => 'Lama',
            'akses' => 'Akses',
            'dialist' => 'Dialist',
            'transfusi' => 'Transfusi',
            'penarikan' => 'Penarikan',
            'qb' => 'Qb',
            'qd' => 'Qd',
            'ureum' => 'Ureum',
            'hb' => 'Hb',
            'hbsag' => 'Hbsag',
            'creatinin' => 'Creatinin',
            'hiv' => 'Hiv',
            'hcv' => 'Hcv',
            'lain' => 'Lain',
            'kd_penyakit' => 'Kd Penyakit',
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
     * Gets query for [[KdPenyakit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdPenyakit()
    {
        return $this->hasOne(Penyakit::class, ['kd_penyakit' => 'kd_penyakit']);
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
