<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_permintaan_stok_obat_pasien".
 *
 * @property string|null $no_permintaan
 * @property string|null $kode_brng
 * @property float|null $jml
 * @property string|null $aturan_pakai
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
 * @property Databarang $kodeBrng
 * @property PermintaanStokObatPasien $noPermintaan
 */
class DetailPermintaanStokObatPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_permintaan_stok_obat_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jml'], 'number'],
            [['jam00', 'jam01', 'jam02', 'jam03', 'jam04', 'jam05', 'jam06', 'jam07', 'jam08', 'jam09', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14', 'jam15', 'jam16', 'jam17', 'jam18', 'jam19', 'jam20', 'jam21', 'jam22', 'jam23'], 'required'],
            [['jam00', 'jam01', 'jam02', 'jam03', 'jam04', 'jam05', 'jam06', 'jam07', 'jam08', 'jam09', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14', 'jam15', 'jam16', 'jam17', 'jam18', 'jam19', 'jam20', 'jam21', 'jam22', 'jam23'], 'string'],
            [['no_permintaan'], 'string', 'max' => 14],
            [['kode_brng'], 'string', 'max' => 15],
            [['aturan_pakai'], 'string', 'max' => 150],
            [['no_permintaan'], 'exist', 'skipOnError' => true, 'targetClass' => PermintaanStokObatPasien::class, 'targetAttribute' => ['no_permintaan' => 'no_permintaan']],
            [['kode_brng'], 'exist', 'skipOnError' => true, 'targetClass' => Databarang::class, 'targetAttribute' => ['kode_brng' => 'kode_brng']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'kode_brng' => 'Kode Brng',
            'jml' => 'Jml',
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
     * Gets query for [[KodeBrng]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeBrng()
    {
        return $this->hasOne(Databarang::class, ['kode_brng' => 'kode_brng']);
    }

    /**
     * Gets query for [[NoPermintaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPermintaan()
    {
        return $this->hasOne(PermintaanStokObatPasien::class, ['no_permintaan' => 'no_permintaan']);
    }
}
