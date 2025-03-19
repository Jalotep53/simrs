<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pcare_kegiatan_kelompok".
 *
 * @property string $eduId
 * @property string|null $clubId
 * @property string $namaClub
 * @property string|null $tglPelayanan
 * @property string|null $nmKegiatan
 * @property string|null $nmKelompok
 * @property string|null $materi
 * @property string|null $pembicara
 * @property string|null $lokasi
 * @property string|null $keterangan
 * @property float|null $biaya
 *
 * @property Pasien[] $noRkmMedis
 * @property PcarePesertaKegiatanKelompok[] $pcarePesertaKegiatanKelompoks
 */
class PcareKegiatanKelompok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pcare_kegiatan_kelompok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['eduId', 'namaClub'], 'required'],
            [['tglPelayanan'], 'safe'],
            [['biaya'], 'number'],
            [['eduId'], 'string', 'max' => 15],
            [['clubId'], 'string', 'max' => 5],
            [['namaClub', 'materi', 'keterangan'], 'string', 'max' => 100],
            [['nmKegiatan', 'nmKelompok'], 'string', 'max' => 30],
            [['pembicara', 'lokasi'], 'string', 'max' => 50],
            [['eduId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'eduId' => 'Edu ID',
            'clubId' => 'Club ID',
            'namaClub' => 'Nama Club',
            'tglPelayanan' => 'Tgl Pelayanan',
            'nmKegiatan' => 'Nm Kegiatan',
            'nmKelompok' => 'Nm Kelompok',
            'materi' => 'Materi',
            'pembicara' => 'Pembicara',
            'lokasi' => 'Lokasi',
            'keterangan' => 'Keterangan',
            'biaya' => 'Biaya',
        ];
    }

    /**
     * Gets query for [[NoRkmMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRkmMedis()
    {
        return $this->hasMany(Pasien::class, ['no_rkm_medis' => 'no_rkm_medis'])->viaTable('pcare_peserta_kegiatan_kelompok', ['eduId' => 'eduId']);
    }

    /**
     * Gets query for [[PcarePesertaKegiatanKelompoks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPcarePesertaKegiatanKelompoks()
    {
        return $this->hasMany(PcarePesertaKegiatanKelompok::class, ['eduId' => 'eduId']);
    }
}
