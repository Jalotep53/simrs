<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rekonsiliasi_obat".
 *
 * @property string $no_rekonsiliasi
 * @property string $no_rawat
 * @property string $tanggal_wawancara
 * @property string|null $rekonsiliasi_obat_saat
 * @property string|null $alergi_obat
 * @property string|null $manifestasi_alergi
 * @property string|null $dampak_alergi
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property RekonsiliasiObatDetailObat[] $rekonsiliasiObatDetailObats
 * @property RekonsiliasiObatKonfirmasi $rekonsiliasiObatKonfirmasi
 */
class RekonsiliasiObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rekonsiliasi_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rekonsiliasi', 'no_rawat', 'tanggal_wawancara'], 'required'],
            [['tanggal_wawancara'], 'safe'],
            [['rekonsiliasi_obat_saat', 'dampak_alergi'], 'string'],
            [['no_rekonsiliasi', 'nip'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['alergi_obat', 'manifestasi_alergi'], 'string', 'max' => 70],
            [['no_rekonsiliasi'], 'unique'],
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
            'no_rekonsiliasi' => 'No Rekonsiliasi',
            'no_rawat' => 'No Rawat',
            'tanggal_wawancara' => 'Tanggal Wawancara',
            'rekonsiliasi_obat_saat' => 'Rekonsiliasi Obat Saat',
            'alergi_obat' => 'Alergi Obat',
            'manifestasi_alergi' => 'Manifestasi Alergi',
            'dampak_alergi' => 'Dampak Alergi',
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

    /**
     * Gets query for [[RekonsiliasiObatDetailObats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekonsiliasiObatDetailObats()
    {
        return $this->hasMany(RekonsiliasiObatDetailObat::class, ['no_rekonsiliasi' => 'no_rekonsiliasi']);
    }

    /**
     * Gets query for [[RekonsiliasiObatKonfirmasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekonsiliasiObatKonfirmasi()
    {
        return $this->hasOne(RekonsiliasiObatKonfirmasi::class, ['no_rekonsiliasi' => 'no_rekonsiliasi']);
    }
}
