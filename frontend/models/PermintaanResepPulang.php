<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_resep_pulang".
 *
 * @property string $no_permintaan
 * @property string|null $tgl_permintaan
 * @property string $jam
 * @property string $no_rawat
 * @property string $kd_dokter
 * @property string $status
 * @property string $tgl_validasi
 * @property string $jam_validasi
 *
 * @property DetailPermintaanResepPulang[] $detailPermintaanResepPulangs
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PermintaanResepPulang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_resep_pulang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'jam', 'kd_dokter', 'status', 'tgl_validasi', 'jam_validasi'], 'required'],
            [['tgl_permintaan', 'jam', 'tgl_validasi', 'jam_validasi'], 'safe'],
            [['status'], 'string'],
            [['no_permintaan'], 'string', 'max' => 14],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['tgl_permintaan', 'jam', 'no_rawat'], 'unique', 'targetAttribute' => ['tgl_permintaan', 'jam', 'no_rawat']],
            [['no_permintaan'], 'unique'],
            [['no_rawat'], 'exist', 'skipOnError' => true, 'targetClass' => RegPeriksa::class, 'targetAttribute' => ['no_rawat' => 'no_rawat']],
            [['kd_dokter'], 'exist', 'skipOnError' => true, 'targetClass' => Dokter::class, 'targetAttribute' => ['kd_dokter' => 'kd_dokter']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'tgl_permintaan' => 'Tgl Permintaan',
            'jam' => 'Jam',
            'no_rawat' => 'No Rawat',
            'kd_dokter' => 'Kd Dokter',
            'status' => 'Status',
            'tgl_validasi' => 'Tgl Validasi',
            'jam_validasi' => 'Jam Validasi',
        ];
    }

    /**
     * Gets query for [[DetailPermintaanResepPulangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanResepPulangs()
    {
        return $this->hasMany(DetailPermintaanResepPulang::class, ['no_permintaan' => 'no_permintaan']);
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
     * Gets query for [[NoRawat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRawat()
    {
        return $this->hasOne(RegPeriksa::class, ['no_rawat' => 'no_rawat']);
    }
}
