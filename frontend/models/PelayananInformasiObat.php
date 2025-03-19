<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pelayanan_informasi_obat".
 *
 * @property string $no_permintaan
 * @property string $no_rawat
 * @property string $tanggal
 * @property string|null $metode
 * @property string|null $penanya
 * @property string|null $status_penanya
 * @property string|null $no_telp_penanya
 * @property string|null $jenis_pertanyaan
 * @property string|null $keterangan_jenis_pertanyaan
 * @property string|null $uraian_pertanyaan
 *
 * @property JawabanPioApoteker $jawabanPioApoteker
 * @property RegPeriksa $noRawat
 */
class PelayananInformasiObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelayanan_informasi_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'no_rawat', 'tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['metode', 'status_penanya', 'jenis_pertanyaan'], 'string'],
            [['no_permintaan'], 'string', 'max' => 20],
            [['no_rawat'], 'string', 'max' => 17],
            [['penanya'], 'string', 'max' => 70],
            [['no_telp_penanya', 'keterangan_jenis_pertanyaan'], 'string', 'max' => 30],
            [['uraian_pertanyaan'], 'string', 'max' => 500],
            [['no_permintaan'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'metode' => 'Metode',
            'penanya' => 'Penanya',
            'status_penanya' => 'Status Penanya',
            'no_telp_penanya' => 'No Telp Penanya',
            'jenis_pertanyaan' => 'Jenis Pertanyaan',
            'keterangan_jenis_pertanyaan' => 'Keterangan Jenis Pertanyaan',
            'uraian_pertanyaan' => 'Uraian Pertanyaan',
        ];
    }

    /**
     * Gets query for [[JawabanPioApoteker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJawabanPioApoteker()
    {
        return $this->hasOne(JawabanPioApoteker::class, ['no_permintaan' => 'no_permintaan']);
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
