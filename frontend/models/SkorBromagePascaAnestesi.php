<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "skor_bromage_pasca_anestesi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $penilaian_skala1
 * @property int|null $penilaian_nilai1
 * @property string|null $keluar
 * @property string|null $instruksi
 * @property string $kd_dokter
 * @property string $nip
 *
 * @property Dokter $kdDokter
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class SkorBromagePascaAnestesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skor_bromage_pasca_anestesi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['penilaian_skala1'], 'string'],
            [['penilaian_nilai1'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['keluar', 'instruksi'], 'string', 'max' => 200],
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
