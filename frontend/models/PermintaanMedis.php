<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "permintaan_medis".
 *
 * @property string $no_permintaan
 * @property string|null $kd_bangsal
 * @property string|null $nip
 * @property string|null $tanggal
 * @property string|null $status
 * @property string $kd_bangsaltujuan
 *
 * @property DetailPermintaanMedis[] $detailPermintaanMedis
 * @property Bangsal $kdBangsal
 * @property Bangsal $kdBangsaltujuan
 * @property Pegawai $nip0
 */
class PermintaanMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'permintaan_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_permintaan', 'kd_bangsaltujuan'], 'required'],
            [['tanggal'], 'safe'],
            [['status'], 'string'],
            [['no_permintaan', 'nip'], 'string', 'max' => 20],
            [['kd_bangsal', 'kd_bangsaltujuan'], 'string', 'max' => 5],
            [['no_permintaan'], 'unique'],
            [['kd_bangsal'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsal' => 'kd_bangsal']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::class, 'targetAttribute' => ['nip' => 'nik']],
            [['kd_bangsaltujuan'], 'exist', 'skipOnError' => true, 'targetClass' => Bangsal::class, 'targetAttribute' => ['kd_bangsaltujuan' => 'kd_bangsal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_permintaan' => 'No Permintaan',
            'kd_bangsal' => 'Kd Bangsal',
            'nip' => 'Nip',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
            'kd_bangsaltujuan' => 'Kd Bangsaltujuan',
        ];
    }

    /**
     * Gets query for [[DetailPermintaanMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailPermintaanMedis()
    {
        return $this->hasMany(DetailPermintaanMedis::class, ['no_permintaan' => 'no_permintaan']);
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
     * Gets query for [[KdBangsaltujuan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBangsaltujuan()
    {
        return $this->hasOne(Bangsal::class, ['kd_bangsal' => 'kd_bangsaltujuan']);
    }

    /**
     * Gets query for [[Nip0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNip0()
    {
        return $this->hasOne(Pegawai::class, ['nik' => 'nip']);
    }
}
