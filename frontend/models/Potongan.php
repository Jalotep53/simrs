<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "potongan".
 *
 * @property string $tahun
 * @property int $bulan
 * @property int $id
 * @property float $bpjs
 * @property float $jamsostek
 * @property float $dansos
 * @property float $simwajib
 * @property float $angkop
 * @property float $angla
 * @property float $telpri
 * @property float $pajak
 * @property float $pribadi
 * @property float $lain
 * @property string $ktg
 *
 * @property Pegawai $id0
 */
class Potongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'potongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun', 'bulan', 'id', 'bpjs', 'jamsostek', 'dansos', 'simwajib', 'angkop', 'angla', 'telpri', 'pajak', 'pribadi', 'lain', 'ktg'], 'required'],
            [['tahun'], 'safe'],
            [['bulan', 'id'], 'integer'],
            [['bpjs', 'jamsostek', 'dansos', 'simwajib', 'angkop', 'angla', 'telpri', 'pajak', 'pribadi', 'lain'], 'number'],
            [['ktg'], 'string', 'max' => 50],
            [['tahun', 'bulan', 'id'], 'unique', 'targetAttribute' => ['tahun', 'bulan', 'id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tahun' => 'Tahun',
            'bulan' => 'Bulan',
            'id' => 'ID',
            'bpjs' => 'Bpjs',
            'jamsostek' => 'Jamsostek',
            'dansos' => 'Dansos',
            'simwajib' => 'Simwajib',
            'angkop' => 'Angkop',
            'angla' => 'Angla',
            'telpri' => 'Telpri',
            'pajak' => 'Pajak',
            'pribadi' => 'Pribadi',
            'lain' => 'Lain',
            'ktg' => 'Ktg',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Pegawai::class, ['id' => 'id']);
    }
}
