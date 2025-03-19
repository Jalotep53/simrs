<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat_keluar".
 *
 * @property string $no_urut
 * @property string $no_surat
 * @property string $tujuan
 * @property string $tgl_surat
 * @property string $perihal
 * @property string $tgl_kirim
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
 * @property SuratBalas $kdBalas0
 * @property SuratKlasifikasi $kdKlasifikasi
 * @property SuratKlasifikasi $kdKlasifikasi0
 * @property SuratLemari $kdLemari
 * @property SuratLemari $kdLemari0
 * @property SuratMap $kdMap
 * @property SuratMap $kdMap0
 * @property SuratRak $kdRak
 * @property SuratRak $kdRak0
 * @property SuratRuang $kdRuang
 * @property SuratRuang $kdRuang0
 * @property SuratSifat $kdSifat
 * @property SuratSifat $kdSifat0
 * @property SuratStatus $kdStatus
 * @property SuratStatus $kdStatus0
 * @property SuratKeluarDisposisi[] $suratKeluarDisposisis
 * @property SuratKeluarKendali[] $suratKeluarKendalis
 */
class SuratKeluar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keluar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut', 'no_surat', 'tujuan', 'tgl_surat', 'perihal', 'tgl_kirim', 'kd_lemari', 'kd_rak', 'kd_map', 'kd_ruang', 'kd_sifat', 'lampiran', 'tembusan', 'tgl_deadline_balas', 'kd_balas', 'keterangan', 'kd_status', 'kd_klasifikasi', 'file_url'], 'required'],
            [['tgl_surat', 'tgl_kirim', 'tgl_deadline_balas'], 'safe'],
            [['no_urut'], 'string', 'max' => 15],
            [['no_surat'], 'string', 'max' => 50],
            [['tujuan', 'perihal', 'lampiran', 'tembusan', 'keterangan'], 'string', 'max' => 300],
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
            [['kd_rak'], 'exist', 'skipOnError' => true, 'targetClass' => SuratRak::class, 'targetAttribute' => ['kd_rak' => 'kd']],
            [['kd_map'], 'exist', 'skipOnError' => true, 'targetClass' => SuratMap::class, 'targetAttribute' => ['kd_map' => 'kd']],
            [['kd_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => SuratRuang::class, 'targetAttribute' => ['kd_ruang' => 'kd']],
            [['kd_sifat'], 'exist', 'skipOnError' => true, 'targetClass' => SuratSifat::class, 'targetAttribute' => ['kd_sifat' => 'kd']],
            [['kd_balas'], 'exist', 'skipOnError' => true, 'targetClass' => SuratBalas::class, 'targetAttribute' => ['kd_balas' => 'kd']],
            [['kd_status'], 'exist', 'skipOnError' => true, 'targetClass' => SuratStatus::class, 'targetAttribute' => ['kd_status' => 'kd']],
            [['kd_klasifikasi'], 'exist', 'skipOnError' => true, 'targetClass' => SuratKlasifikasi::class, 'targetAttribute' => ['kd_klasifikasi' => 'kd']],
            [['kd_lemari'], 'exist', 'skipOnError' => true, 'targetClass' => SuratLemari::class, 'targetAttribute' => ['kd_lemari' => 'kd']],
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
            'tujuan' => 'Tujuan',
            'tgl_surat' => 'Tgl Surat',
            'perihal' => 'Perihal',
            'tgl_kirim' => 'Tgl Kirim',
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
     * Gets query for [[KdBalas0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdBalas0()
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
     * Gets query for [[KdKlasifikasi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdKlasifikasi0()
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
     * Gets query for [[KdLemari0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdLemari0()
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
     * Gets query for [[KdMap0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdMap0()
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
     * Gets query for [[KdRak0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRak0()
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
     * Gets query for [[KdRuang0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdRuang0()
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
     * Gets query for [[KdSifat0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdSifat0()
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
     * Gets query for [[KdStatus0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKdStatus0()
    {
        return $this->hasOne(SuratStatus::class, ['kd' => 'kd_status']);
    }

    /**
     * Gets query for [[SuratKeluarDisposisis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluarDisposisis()
    {
        return $this->hasMany(SuratKeluarDisposisi::class, ['no_urut' => 'no_urut']);
    }

    /**
     * Gets query for [[SuratKeluarKendalis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeluarKendalis()
    {
        return $this->hasMany(SuratKeluarKendali::class, ['no_urut' => 'no_urut']);
    }
}
