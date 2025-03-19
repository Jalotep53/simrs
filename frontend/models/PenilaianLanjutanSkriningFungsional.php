<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_lanjutan_skrining_fungsional".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_skrining_skala1
 * @property int|null $penilaian_skrining_nilai1
 * @property string|null $penilaian_skrining_skala2
 * @property int|null $penilaian_skrining_nilai2
 * @property string|null $penilaian_skrining_skala3
 * @property int|null $penilaian_skrining_nilai3
 * @property string|null $penilaian_skrining_skala4
 * @property int|null $penilaian_skrining_nilai4
 * @property string|null $penilaian_skrining_skala5
 * @property int|null $penilaian_skrining_nilai5
 * @property string|null $penilaian_skrining_skala6
 * @property int|null $penilaian_skrining_nilai6
 * @property string|null $penilaian_skrining_skala7
 * @property int|null $penilaian_skrining_nilai7
 * @property string|null $penilaian_skrining_skala8
 * @property int|null $penilaian_skrining_nilai8
 * @property string|null $penilaian_skrining_skala9
 * @property int|null $penilaian_skrining_nilai9
 * @property string|null $penilaian_skrining_skala10
 * @property int|null $penilaian_skrining_nilai10
 * @property int|null $penilaian_skrining_totalnilai
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianLanjutanSkriningFungsional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_lanjutan_skrining_fungsional';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_skrining_skala1', 'penilaian_skrining_skala2', 'penilaian_skrining_skala3', 'penilaian_skrining_skala4', 'penilaian_skrining_skala5', 'penilaian_skrining_skala6', 'penilaian_skrining_skala7', 'penilaian_skrining_skala8', 'penilaian_skrining_skala9', 'penilaian_skrining_skala10'], 'string'],
            [['penilaian_skrining_nilai1', 'penilaian_skrining_nilai2', 'penilaian_skrining_nilai3', 'penilaian_skrining_nilai4', 'penilaian_skrining_nilai5', 'penilaian_skrining_nilai6', 'penilaian_skrining_nilai7', 'penilaian_skrining_nilai8', 'penilaian_skrining_nilai9', 'penilaian_skrining_nilai10', 'penilaian_skrining_totalnilai'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'penilaian_skrining_skala1' => 'Penilaian Skrining Skala1',
            'penilaian_skrining_nilai1' => 'Penilaian Skrining Nilai1',
            'penilaian_skrining_skala2' => 'Penilaian Skrining Skala2',
            'penilaian_skrining_nilai2' => 'Penilaian Skrining Nilai2',
            'penilaian_skrining_skala3' => 'Penilaian Skrining Skala3',
            'penilaian_skrining_nilai3' => 'Penilaian Skrining Nilai3',
            'penilaian_skrining_skala4' => 'Penilaian Skrining Skala4',
            'penilaian_skrining_nilai4' => 'Penilaian Skrining Nilai4',
            'penilaian_skrining_skala5' => 'Penilaian Skrining Skala5',
            'penilaian_skrining_nilai5' => 'Penilaian Skrining Nilai5',
            'penilaian_skrining_skala6' => 'Penilaian Skrining Skala6',
            'penilaian_skrining_nilai6' => 'Penilaian Skrining Nilai6',
            'penilaian_skrining_skala7' => 'Penilaian Skrining Skala7',
            'penilaian_skrining_nilai7' => 'Penilaian Skrining Nilai7',
            'penilaian_skrining_skala8' => 'Penilaian Skrining Skala8',
            'penilaian_skrining_nilai8' => 'Penilaian Skrining Nilai8',
            'penilaian_skrining_skala9' => 'Penilaian Skrining Skala9',
            'penilaian_skrining_nilai9' => 'Penilaian Skrining Nilai9',
            'penilaian_skrining_skala10' => 'Penilaian Skrining Skala10',
            'penilaian_skrining_nilai10' => 'Penilaian Skrining Nilai10',
            'penilaian_skrining_totalnilai' => 'Penilaian Skrining Totalnilai',
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
