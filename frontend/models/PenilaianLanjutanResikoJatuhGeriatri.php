<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_lanjutan_resiko_jatuh_geriatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_jatuh_skala1
 * @property int|null $penilaian_jatuh_nilai1
 * @property string|null $penilaian_jatuh_skala2
 * @property int|null $penilaian_jatuh_nilai2
 * @property string|null $penilaian_jatuh_skala3
 * @property int|null $penilaian_jatuh_nilai3
 * @property string|null $penilaian_jatuh_skala4
 * @property int|null $penilaian_jatuh_nilai4
 * @property string|null $penilaian_jatuh_skala5
 * @property int|null $penilaian_jatuh_nilai5
 * @property string|null $penilaian_jatuh_skala6
 * @property int|null $penilaian_jatuh_nilai6
 * @property string|null $penilaian_jatuh_skala7
 * @property int|null $penilaian_jatuh_nilai7
 * @property string|null $penilaian_jatuh_skala8
 * @property int|null $penilaian_jatuh_nilai8
 * @property string|null $penilaian_jatuh_skala9
 * @property int|null $penilaian_jatuh_nilai9
 * @property string|null $penilaian_jatuh_skala10
 * @property int|null $penilaian_jatuh_nilai10
 * @property string|null $penilaian_jatuh_skala11
 * @property int|null $penilaian_jatuh_nilai11
 * @property int|null $penilaian_jatuh_totalnilai
 * @property string|null $hasil_skrining
 * @property string|null $saran
 * @property string $nip
 *
 * @property Petugas $nip0
 */
class PenilaianLanjutanResikoJatuhGeriatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_lanjutan_resiko_jatuh_geriatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_jatuh_skala1', 'penilaian_jatuh_skala2', 'penilaian_jatuh_skala3', 'penilaian_jatuh_skala4', 'penilaian_jatuh_skala5', 'penilaian_jatuh_skala6', 'penilaian_jatuh_skala7', 'penilaian_jatuh_skala8', 'penilaian_jatuh_skala9', 'penilaian_jatuh_skala10', 'penilaian_jatuh_skala11'], 'string'],
            [['penilaian_jatuh_nilai1', 'penilaian_jatuh_nilai2', 'penilaian_jatuh_nilai3', 'penilaian_jatuh_nilai4', 'penilaian_jatuh_nilai5', 'penilaian_jatuh_nilai6', 'penilaian_jatuh_nilai7', 'penilaian_jatuh_nilai8', 'penilaian_jatuh_nilai9', 'penilaian_jatuh_nilai10', 'penilaian_jatuh_nilai11', 'penilaian_jatuh_totalnilai'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['hasil_skrining', 'saran'], 'string', 'max' => 200],
            [['nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'penilaian_jatuh_skala1' => 'Penilaian Jatuh Skala1',
            'penilaian_jatuh_nilai1' => 'Penilaian Jatuh Nilai1',
            'penilaian_jatuh_skala2' => 'Penilaian Jatuh Skala2',
            'penilaian_jatuh_nilai2' => 'Penilaian Jatuh Nilai2',
            'penilaian_jatuh_skala3' => 'Penilaian Jatuh Skala3',
            'penilaian_jatuh_nilai3' => 'Penilaian Jatuh Nilai3',
            'penilaian_jatuh_skala4' => 'Penilaian Jatuh Skala4',
            'penilaian_jatuh_nilai4' => 'Penilaian Jatuh Nilai4',
            'penilaian_jatuh_skala5' => 'Penilaian Jatuh Skala5',
            'penilaian_jatuh_nilai5' => 'Penilaian Jatuh Nilai5',
            'penilaian_jatuh_skala6' => 'Penilaian Jatuh Skala6',
            'penilaian_jatuh_nilai6' => 'Penilaian Jatuh Nilai6',
            'penilaian_jatuh_skala7' => 'Penilaian Jatuh Skala7',
            'penilaian_jatuh_nilai7' => 'Penilaian Jatuh Nilai7',
            'penilaian_jatuh_skala8' => 'Penilaian Jatuh Skala8',
            'penilaian_jatuh_nilai8' => 'Penilaian Jatuh Nilai8',
            'penilaian_jatuh_skala9' => 'Penilaian Jatuh Skala9',
            'penilaian_jatuh_nilai9' => 'Penilaian Jatuh Nilai9',
            'penilaian_jatuh_skala10' => 'Penilaian Jatuh Skala10',
            'penilaian_jatuh_nilai10' => 'Penilaian Jatuh Nilai10',
            'penilaian_jatuh_skala11' => 'Penilaian Jatuh Skala11',
            'penilaian_jatuh_nilai11' => 'Penilaian Jatuh Nilai11',
            'penilaian_jatuh_totalnilai' => 'Penilaian Jatuh Totalnilai',
            'hasil_skrining' => 'Hasil Skrining',
            'saran' => 'Saran',
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
}
