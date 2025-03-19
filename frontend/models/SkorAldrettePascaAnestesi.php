<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skor_aldrette_pasca_anestesi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_skala1
 * @property int|null $penilaian_nilai1
 * @property string|null $penilaian_skala2
 * @property int|null $penilaian_nilai2
 * @property string|null $penilaian_skala3
 * @property int|null $penilaian_nilai3
 * @property string|null $penilaian_skala4
 * @property int|null $penilaian_nilai4
 * @property string|null $penilaian_skala5
 * @property int|null $penilaian_nilai5
 * @property int|null $penilaian_totalnilai
 * @property string|null $keluar
 * @property string|null $instruksi
 * @property string $kd_dokter
 * @property string $nip
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class SkorAldrettePascaAnestesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skor_aldrette_pasca_anestesi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_skala1', 'penilaian_skala2', 'penilaian_skala3', 'penilaian_skala4', 'penilaian_skala5'], 'string'],
            [['penilaian_nilai1', 'penilaian_nilai2', 'penilaian_nilai3', 'penilaian_nilai4', 'penilaian_nilai5', 'penilaian_totalnilai'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluar'], 'string', 'max' => 200],
            [['instruksi'], 'string', 'max' => 250],
            [['kd_dokter', 'nip'], 'string', 'max' => 20],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'tanggal' => 'Tanggal',
            'penilaian_skala1' => 'Penilaian Skala1',
            'penilaian_nilai1' => 'Penilaian Nilai1',
            'penilaian_skala2' => 'Penilaian Skala2',
            'penilaian_nilai2' => 'Penilaian Nilai2',
            'penilaian_skala3' => 'Penilaian Skala3',
            'penilaian_nilai3' => 'Penilaian Nilai3',
            'penilaian_skala4' => 'Penilaian Skala4',
            'penilaian_nilai4' => 'Penilaian Nilai4',
            'penilaian_skala5' => 'Penilaian Skala5',
            'penilaian_nilai5' => 'Penilaian Nilai5',
            'penilaian_totalnilai' => 'Penilaian Totalnilai',
            'keluar' => 'Keluar',
            'instruksi' => 'Instruksi',
            'kd_dokter' => 'Kd Dokter',
            'nip' => 'Nip',
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
