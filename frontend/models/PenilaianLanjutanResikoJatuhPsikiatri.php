<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_lanjutan_resiko_jatuh_psikiatri".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_jatuhedmonson_skala1
 * @property int|null $penilaian_jatuhedmonson_nilai1
 * @property string|null $penilaian_jatuhedmonson_skala2
 * @property int|null $penilaian_jatuhedmonson_nilai2
 * @property string|null $penilaian_jatuhedmonson_skala3
 * @property int|null $penilaian_jatuhedmonson_nilai3
 * @property string|null $penilaian_jatuhedmonson_skala4
 * @property int|null $penilaian_jatuhedmonson_nilai4
 * @property string|null $penilaian_jatuhedmonson_skala5
 * @property int|null $penilaian_jatuhedmonson_nilai5
 * @property string|null $penilaian_jatuhedmonson_skala6
 * @property int|null $penilaian_jatuhedmonson_nilai6
 * @property int|null $penilaian_jatuhedmonson_totalnilai
 * @property string|null $hasil_skrining
 * @property string|null $saran
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianLanjutanResikoJatuhPsikiatri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_lanjutan_resiko_jatuh_psikiatri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_jatuhedmonson_skala1', 'penilaian_jatuhedmonson_skala2', 'penilaian_jatuhedmonson_skala3', 'penilaian_jatuhedmonson_skala4', 'penilaian_jatuhedmonson_skala5', 'penilaian_jatuhedmonson_skala6'], 'string'],
            [['penilaian_jatuhedmonson_nilai1', 'penilaian_jatuhedmonson_nilai2', 'penilaian_jatuhedmonson_nilai3', 'penilaian_jatuhedmonson_nilai4', 'penilaian_jatuhedmonson_nilai5', 'penilaian_jatuhedmonson_nilai6', 'penilaian_jatuhedmonson_totalnilai'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['hasil_skrining', 'saran'], 'string', 'max' => 200],
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
            'penilaian_jatuhedmonson_skala1' => 'Penilaian Jatuhedmonson Skala1',
            'penilaian_jatuhedmonson_nilai1' => 'Penilaian Jatuhedmonson Nilai1',
            'penilaian_jatuhedmonson_skala2' => 'Penilaian Jatuhedmonson Skala2',
            'penilaian_jatuhedmonson_nilai2' => 'Penilaian Jatuhedmonson Nilai2',
            'penilaian_jatuhedmonson_skala3' => 'Penilaian Jatuhedmonson Skala3',
            'penilaian_jatuhedmonson_nilai3' => 'Penilaian Jatuhedmonson Nilai3',
            'penilaian_jatuhedmonson_skala4' => 'Penilaian Jatuhedmonson Skala4',
            'penilaian_jatuhedmonson_nilai4' => 'Penilaian Jatuhedmonson Nilai4',
            'penilaian_jatuhedmonson_skala5' => 'Penilaian Jatuhedmonson Skala5',
            'penilaian_jatuhedmonson_nilai5' => 'Penilaian Jatuhedmonson Nilai5',
            'penilaian_jatuhedmonson_skala6' => 'Penilaian Jatuhedmonson Skala6',
            'penilaian_jatuhedmonson_nilai6' => 'Penilaian Jatuhedmonson Nilai6',
            'penilaian_jatuhedmonson_totalnilai' => 'Penilaian Jatuhedmonson Totalnilai',
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
