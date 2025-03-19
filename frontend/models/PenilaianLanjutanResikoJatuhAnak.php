<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_lanjutan_resiko_jatuh_anak".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_humptydumpty_skala1
 * @property int|null $penilaian_humptydumpty_nilai1
 * @property string|null $penilaian_humptydumpty_skala2
 * @property int|null $penilaian_humptydumpty_nilai2
 * @property string|null $penilaian_humptydumpty_skala3
 * @property int|null $penilaian_humptydumpty_nilai3
 * @property string|null $penilaian_humptydumpty_skala4
 * @property int|null $penilaian_humptydumpty_nilai4
 * @property string|null $penilaian_humptydumpty_skala5
 * @property int|null $penilaian_humptydumpty_nilai5
 * @property string|null $penilaian_humptydumpty_skala6
 * @property int|null $penilaian_humptydumpty_nilai6
 * @property string|null $penilaian_humptydumpty_skala7
 * @property int|null $penilaian_humptydumpty_nilai7
 * @property int|null $penilaian_humptydumpty_totalnilai
 * @property string|null $hasil_skrining
 * @property string|null $saran
 * @property string $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianLanjutanResikoJatuhAnak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_lanjutan_resiko_jatuh_anak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_humptydumpty_skala1', 'penilaian_humptydumpty_skala2', 'penilaian_humptydumpty_skala3', 'penilaian_humptydumpty_skala4', 'penilaian_humptydumpty_skala5', 'penilaian_humptydumpty_skala6', 'penilaian_humptydumpty_skala7'], 'string'],
            [['penilaian_humptydumpty_nilai1', 'penilaian_humptydumpty_nilai2', 'penilaian_humptydumpty_nilai3', 'penilaian_humptydumpty_nilai4', 'penilaian_humptydumpty_nilai5', 'penilaian_humptydumpty_nilai6', 'penilaian_humptydumpty_nilai7', 'penilaian_humptydumpty_totalnilai'], 'integer'],
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
            'penilaian_humptydumpty_skala1' => 'Penilaian Humptydumpty Skala1',
            'penilaian_humptydumpty_nilai1' => 'Penilaian Humptydumpty Nilai1',
            'penilaian_humptydumpty_skala2' => 'Penilaian Humptydumpty Skala2',
            'penilaian_humptydumpty_nilai2' => 'Penilaian Humptydumpty Nilai2',
            'penilaian_humptydumpty_skala3' => 'Penilaian Humptydumpty Skala3',
            'penilaian_humptydumpty_nilai3' => 'Penilaian Humptydumpty Nilai3',
            'penilaian_humptydumpty_skala4' => 'Penilaian Humptydumpty Skala4',
            'penilaian_humptydumpty_nilai4' => 'Penilaian Humptydumpty Nilai4',
            'penilaian_humptydumpty_skala5' => 'Penilaian Humptydumpty Skala5',
            'penilaian_humptydumpty_nilai5' => 'Penilaian Humptydumpty Nilai5',
            'penilaian_humptydumpty_skala6' => 'Penilaian Humptydumpty Skala6',
            'penilaian_humptydumpty_nilai6' => 'Penilaian Humptydumpty Nilai6',
            'penilaian_humptydumpty_skala7' => 'Penilaian Humptydumpty Skala7',
            'penilaian_humptydumpty_nilai7' => 'Penilaian Humptydumpty Nilai7',
            'penilaian_humptydumpty_totalnilai' => 'Penilaian Humptydumpty Totalnilai',
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
