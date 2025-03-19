<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "stok_obat_pasien".
 *
 * @property string $tanggal
 * @property string $jam
 * @property string $no_rawat
 * @property string $kode_brng
 * @property float $jumlah
 * @property string $kd_bangsal
 * @property string $no_batch
 * @property string $no_faktur
 * @property string $aturan_pakai
 * @property string $jam00
 * @property string $jam01
 * @property string $jam02
 * @property string $jam03
 * @property string $jam04
 * @property string $jam05
 * @property string $jam06
 * @property string $jam07
 * @property string $jam08
 * @property string $jam09
 * @property string $jam10
 * @property string $jam11
 * @property string $jam12
 * @property string $jam13
 * @property string $jam14
 * @property string $jam15
 * @property string $jam16
 * @property string $jam17
 * @property string $jam18
 * @property string $jam19
 * @property string $jam20
 * @property string $jam21
 * @property string $jam22
 * @property string $jam23
 *
 * @property Bangsal $kdBangsal
 * @property Databarang $kodeBrng
 * @property RegPeriksa $noRawat
 */
class StokObatPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stok_obat_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'jam', 'no_rawat', 'kode_brng', 'jumlah', 'kd_bangsal', 'no_batch', 'no_faktur', 'aturan_pakai', 'jam00', 'jam01', 'jam02', 'jam03', 'jam04', 'jam05', 'jam06', 'jam07', 'jam08', 'jam09', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14', 'jam15', 'jam16', 'jam17', 'jam18', 'jam19', 'jam20', 'jam21', 'jam22', 'jam23'], 'required'],
            [['tanggal', 'jam'], 'safe'],
            [['jumlah'], 'number'],
            [['jam00', 'jam01', 'jam02', 'jam03', 'jam04', 'jam05', 'jam06', 'jam07', 'jam08', 'jam09', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14', 'jam15', 'jam16', 'jam17', 'jam18', 'jam19', 'jam20', 'jam21', 'jam22', 'jam23'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kode_brng'], 'string', 'max' => 15],
            [['kd_bangsal'], 'string', 'max' => 5],
            [['no_batch', 'no_faktur'], 'string', 'max' => 20],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['tanggal', 'jam', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur'], 'unique', 'targetAttribute' => ['tanggal', 'jam', 'no_rawat', 'kode_brng', 'no_batch', 'no_faktur']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'kode_brng' => 'Kode Brng',
            'jumlah' => 'Jumlah',
            'kd_bangsal' => 'Kd Bangsal',
            'no_batch' => 'No Batch',
            'no_faktur' => 'No Faktur',
            'aturan_pakai' => 'Aturan Pakai',
            'jam00' => 'Jam00',
            'jam01' => 'Jam01',
            'jam02' => 'Jam02',
            'jam03' => 'Jam03',
            'jam04' => 'Jam04',
            'jam05' => 'Jam05',
            'jam06' => 'Jam06',
            'jam07' => 'Jam07',
            'jam08' => 'Jam08',
            'jam09' => 'Jam09',
            'jam10' => 'Jam10',
            'jam11' => 'Jam11',
            'jam12' => 'Jam12',
            'jam13' => 'Jam13',
            'jam14' => 'Jam14',
            'jam15' => 'Jam15',
            'jam16' => 'Jam16',
            'jam17' => 'Jam17',
            'jam18' => 'Jam18',
            'jam19' => 'Jam19',
            'jam20' => 'Jam20',
            'jam21' => 'Jam21',
            'jam22' => 'Jam22',
            'jam23' => 'Jam23',
        ];
    }

    /**
     * Gets query for [[KdBangsal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsal()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsal']);
    }

    /**
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
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
