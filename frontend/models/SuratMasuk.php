<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_masuk".
 *
 * @property string $no_urut
 * @property string $no_surat
 * @property string $asal
 * @property string $tujuan
 * @property string $tgl_surat
 * @property string $perihal
 * @property string $tgl_terima
 * @property string $kd_lemari
 * @property string $kd_rak
 * @property string $kd_map
 * @property string $kd_ruang
 * @property string $kd_sifat
 * @property string $lampiran
 * @property string $tembusan
 * @property string $tgl_deadline_balas
 * @property string $kd_balas
 * @property string $keterangan
 * @property string $kd_status
 * @property string $kd_klasifikasi
 * @property string $file_url
 *
 * @property SuratBalas $kdBalas
 * @property SuratKlasifikasi $kdKlasifikasi
 * @property SuratLemari $kdLemari
 * @property SuratMap $kdMap
 * @property SuratRak $kdRak
 * @property SuratRuang $kdRuang
 * @property SuratSifat $kdSifat
 * @property SuratStatus $kdStatus
 * @property SuratMasukDisposisi[] $suratMasukDisposisis
 * @property SuratMasukKendali[] $suratMasukKendalis
 */
class SuratMasuk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_masuk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut', 'no_surat', 'asal', 'tujuan', 'tgl_surat', 'perihal', 'tgl_terima', 'kd_lemari', 'kd_rak', 'kd_map', 'kd_ruang', 'kd_sifat', 'lampiran', 'tembusan', 'tgl_deadline_balas', 'kd_balas', 'keterangan', 'kd_status', 'kd_klasifikasi', 'file_url'], 'required'],
            [['tgl_surat', 'tgl_terima', 'tgl_deadline_balas'], 'safe'],
            [['no_urut'], 'string', 'max' => 15],
            [['no_surat'], 'string', 'max' => 50],
            [['asal', 'tujuan', 'perihal', 'lampiran', 'tembusan', 'keterangan'], 'string', 'max' => 300],
            [['kd_lemari', 'kd_rak', 'kd_map', 'kd_ruang', 'kd_sifat', 'kd_balas', 'kd_status', 'kd_klasifikasi'], 'string', 'max' => 5],
            [['file_url'], 'string', 'max' => 500],
            [['no_urut'], 'unique'],
            [['kd_lemari'], 'exist', 'skipOnError' => true, 'targetClass' => SuratLemari::class, 'targetAttribute' => ['kd_lemari' => 'kd']],
            [['kd_rak'], 'exist', 'skipOnError' => true, 'targetClass' => SuratRak::class, 'targetAttribute' => ['kd_rak' => 'kd']],
            [['kd_map'], 'exist', 'skipOnError' => true, 'targetClass' => SuratMap::class, 'targetAttribute' => ['kd_map' => 'kd']],
            [['kd_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => SuratRuang::class, 'targetAttribute' => ['kd_ruang' => 'kd']],
            [['kd_sifat'], 'exist', 'skipOnError' => true, 'targetClass' => SuratSifat::class, 'targetAttribute' => ['kd_sifat' => 'kd']],
            [['kd_balas'], 'exist', 'skipOnError' => true, 'targetClass' => SuratBalas::class, 'targetAttribute' => ['kd_balas' => 'kd']],
            [['kd_status'], 'exist', 'skipOnError' => true, 'targetClass' => SuratStatus::class, 'targetAttribute' => ['kd_status' => 'kd']],
            [['kd_klasifikasi'], 'exist', 'skipOnError' => true, 'targetClass' => SuratKlasifikasi::class, 'targetAttribute' => ['kd_klasifikasi' => 'kd']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_urut' => 'No Urut',
            'no_surat' => 'No Surat',
            'asal' => 'Asal',
            'tujuan' => 'Tujuan',
            'tgl_surat' => 'Tgl Surat',
            'perihal' => 'Perihal',
            'tgl_terima' => 'Tgl Terima',
            'kd_lemari' => 'Kd Lemari',
            'kd_rak' => 'Kd Rak',
            'kd_map' => 'Kd Map',
            'kd_ruang' => 'Kd Ruang',
            'kd_sifat' => 'Kd Sifat',
            'lampiran' => 'Lampiran',
            'tembusan' => 'Tembusan',
            'tgl_deadline_balas' => 'Tgl Deadline Balas',
            'kd_balas' => 'Kd Balas',
            'keterangan' => 'Keterangan',
            'kd_status' => 'Kd Status',
            'kd_klasifikasi' => 'Kd Klasifikasi',
            'file_url' => 'File Url',
        ];
    }

    /**
     * Gets query for [[KdBalas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBalas()
    {
        return $this->hasOne(SuratBalas::class, ['kd' => 'kd_balas']);
    }

    /**
     * Gets query for [[KdKlasifikasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKlasifikasi()
    {
        return $this->hasOne(SuratKlasifikasi::class, ['kd' => 'kd_klasifikasi']);
    }

    /**
     * Gets query for [[KdLemari]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdLemari()
    {
        return $this->hasOne(SuratLemari::class, ['kd' => 'kd_lemari']);
    }

    /**
     * Gets query for [[KdMap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdMap()
    {
        return $this->hasOne(SuratMap::class, ['kd' => 'kd_map']);
    }

    /**
     * Gets query for [[KdRak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRak()
    {
        return $this->hasOne(SuratRak::class, ['kd' => 'kd_rak']);
    }

    /**
     * Gets query for [[KdRuang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRuang()
    {
        return $this->hasOne(SuratRuang::class, ['kd' => 'kd_ruang']);
    }

    /**
     * Gets query for [[KdSifat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdSifat()
    {
        return $this->hasOne(SuratSifat::class, ['kd' => 'kd_sifat']);
    }

    /**
     * Gets query for [[KdStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdStatus()
    {
        return $this->hasOne(SuratStatus::class, ['kd' => 'kd_status']);
    }

    /**
     * Gets query for [[SuratMasukDisposisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasukDisposisis()
    {
        return $this->hasMany(SuratMasukDisposisi::class, ['no_urut' => 'no_urut']);
    }

    /**
     * Gets query for [[SuratMasukKendalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratMasukKendalis()
    {
        return $this->hasMany(SuratMasukKendali::class, ['no_urut' => 'no_urut']);
    }
}
