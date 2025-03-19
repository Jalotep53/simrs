<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "konseling_farmasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $diagnosa
 * @property string|null $obat_pemakaian
 * @property string|null $riwayat_alergi
 * @property string|null $keluhan
 * @property string|null $pernah_datang
 * @property string|null $tindak_lanjut
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class KonselingFarmasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konseling_farmasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['pernah_datang'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['diagnosa'], 'string', 'max' => 40],
            [['obat_pemakaian'], 'string', 'max' => 700],
            [['riwayat_alergi'], 'string', 'max' => 30],
            [['keluhan'], 'string', 'max' => 300],
            [['tindak_lanjut'], 'string', 'max' => 400],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
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
            'tanggal' => 'Tanggal',
            'diagnosa' => 'Diagnosa',
            'obat_pemakaian' => 'Obat Pemakaian',
            'riwayat_alergi' => 'Riwayat Alergi',
            'keluhan' => 'Keluhan',
            'pernah_datang' => 'Pernah Datang',
            'tindak_lanjut' => 'Tindak Lanjut',
            'nip' => 'Nip',
        ];
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
