<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_lanjutan_resiko_jatuh_lansia".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_jatuhmorse_skala1
 * @property int|null $penilaian_jatuhmorse_nilai1
 * @property string|null $penilaian_jatuhmorse_skala2
 * @property int|null $penilaian_jatuhmorse_nilai2
 * @property string|null $penilaian_jatuhmorse_skala3
 * @property int|null $penilaian_jatuhmorse_nilai3
 * @property string|null $penilaian_jatuhmorse_skala4
 * @property int|null $penilaian_jatuhmorse_nilai4
 * @property string|null $penilaian_jatuhmorse_skala5
 * @property int|null $penilaian_jatuhmorse_nilai5
 * @property string|null $penilaian_jatuhmorse_skala6
 * @property int|null $penilaian_jatuhmorse_nilai6
 * @property int|null $penilaian_jatuhmorse_totalnilai
 * @property string|null $hasil_skrining
 * @property string|null $saran
 * @property string $nip
 *
 * @property Petugas $nip0
 */
class PenilaianLanjutanResikoJatuhLansia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_lanjutan_resiko_jatuh_lansia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_jatuhmorse_skala1', 'penilaian_jatuhmorse_skala2', 'penilaian_jatuhmorse_skala3', 'penilaian_jatuhmorse_skala4', 'penilaian_jatuhmorse_skala5', 'penilaian_jatuhmorse_skala6'], 'string'],
            [['penilaian_jatuhmorse_nilai1', 'penilaian_jatuhmorse_nilai2', 'penilaian_jatuhmorse_nilai3', 'penilaian_jatuhmorse_nilai4', 'penilaian_jatuhmorse_nilai5', 'penilaian_jatuhmorse_nilai6', 'penilaian_jatuhmorse_totalnilai'], 'integer'],
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
            'penilaian_jatuhmorse_skala1' => 'Penilaian Jatuhmorse Skala1',
            'penilaian_jatuhmorse_nilai1' => 'Penilaian Jatuhmorse Nilai1',
            'penilaian_jatuhmorse_skala2' => 'Penilaian Jatuhmorse Skala2',
            'penilaian_jatuhmorse_nilai2' => 'Penilaian Jatuhmorse Nilai2',
            'penilaian_jatuhmorse_skala3' => 'Penilaian Jatuhmorse Skala3',
            'penilaian_jatuhmorse_nilai3' => 'Penilaian Jatuhmorse Nilai3',
            'penilaian_jatuhmorse_skala4' => 'Penilaian Jatuhmorse Skala4',
            'penilaian_jatuhmorse_nilai4' => 'Penilaian Jatuhmorse Nilai4',
            'penilaian_jatuhmorse_skala5' => 'Penilaian Jatuhmorse Skala5',
            'penilaian_jatuhmorse_nilai5' => 'Penilaian Jatuhmorse Nilai5',
            'penilaian_jatuhmorse_skala6' => 'Penilaian Jatuhmorse Skala6',
            'penilaian_jatuhmorse_nilai6' => 'Penilaian Jatuhmorse Nilai6',
            'penilaian_jatuhmorse_totalnilai' => 'Penilaian Jatuhmorse Totalnilai',
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
