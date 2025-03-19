<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_psikologi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string $anamnesis
 * @property string $dikirim_dari
 * @property string $tujuan_pemeriksaan
 * @property string $ket_anamnesis
 * @property string $rupa
 * @property string $bentuk_tubuh
 * @property string $tindakan
 * @property string $pakaian
 * @property string $ekspresi
 * @property string $berbicara
 * @property string $penggunaan_kata
 * @property string $ciri_menyolok
 * @property string $hasil_psikotes
 * @property string $kepribadian
 * @property string $psikodinamika
 * @property string $kesimpulan_psikolog
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenilaianPsikologi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_psikologi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'anamnesis', 'dikirim_dari', 'tujuan_pemeriksaan', 'ket_anamnesis', 'rupa', 'bentuk_tubuh', 'tindakan', 'pakaian', 'ekspresi', 'berbicara', 'penggunaan_kata', 'ciri_menyolok', 'hasil_psikotes', 'kepribadian', 'psikodinamika', 'kesimpulan_psikolog'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'dikirim_dari', 'tujuan_pemeriksaan', 'ket_anamnesis', 'rupa', 'bentuk_tubuh', 'tindakan', 'pakaian', 'ekspresi', 'berbicara', 'penggunaan_kata', 'hasil_psikotes', 'kepribadian', 'psikodinamika', 'kesimpulan_psikolog'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['ciri_menyolok'], 'string', 'max' => 500],
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
            'nip' => 'Nip',
            'anamnesis' => 'Anamnesis',
            'dikirim_dari' => 'Dikirim Dari',
            'tujuan_pemeriksaan' => 'Tujuan Pemeriksaan',
            'ket_anamnesis' => 'Ket Anamnesis',
            'rupa' => 'Rupa',
            'bentuk_tubuh' => 'Bentuk Tubuh',
            'tindakan' => 'Tindakan',
            'pakaian' => 'Pakaian',
            'ekspresi' => 'Ekspresi',
            'berbicara' => 'Berbicara',
            'penggunaan_kata' => 'Penggunaan Kata',
            'ciri_menyolok' => 'Ciri Menyolok',
            'hasil_psikotes' => 'Hasil Psikotes',
            'kepribadian' => 'Kepribadian',
            'psikodinamika' => 'Psikodinamika',
            'kesimpulan_psikolog' => 'Kesimpulan Psikolog',
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
