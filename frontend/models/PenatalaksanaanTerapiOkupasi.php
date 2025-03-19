<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penatalaksanaan_terapi_okupasi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $nip
 * @property string $keluhan_utama
 * @property string $rpd
 * @property string $rps
 * @property string $anamnesa_general
 * @property string $tanda_vital
 * @property string $pemeriksaan_penunjang
 * @property string $spesialisasi
 * @property string $keterangan_spesialisasi
 * @property string $pemeriksaan_okupasi_terapi
 * @property string $aset
 * @property string $limitasi
 * @property string $diagnosa_terapi_okupasi
 * @property string $rencana_intervensi
 *
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 */
class PenatalaksanaanTerapiOkupasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penatalaksanaan_terapi_okupasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'nip', 'rps', 'anamnesa_general', 'tanda_vital', 'pemeriksaan_penunjang', 'spesialisasi', 'keterangan_spesialisasi', 'pemeriksaan_okupasi_terapi', 'aset', 'limitasi', 'diagnosa_terapi_okupasi', 'rencana_intervensi'], 'required'],
            [['tanggal'], 'safe'],
            [['spesialisasi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['nip'], 'string', 'max' => 20],
            [['keluhan_utama', 'rencana_intervensi'], 'string', 'max' => 400],
            [['rpd', 'rps', 'anamnesa_general'], 'string', 'max' => 300],
            [['tanda_vital', 'aset', 'limitasi'], 'string', 'max' => 150],
            [['pemeriksaan_penunjang', 'pemeriksaan_okupasi_terapi'], 'string', 'max' => 200],
            [['keterangan_spesialisasi'], 'string', 'max' => 30],
            [['diagnosa_terapi_okupasi'], 'string', 'max' => 100],
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
            'keluhan_utama' => 'Keluhan Utama',
            'rpd' => 'Rpd',
            'rps' => 'Rps',
            'anamnesa_general' => 'Anamnesa General',
            'tanda_vital' => 'Tanda Vital',
            'pemeriksaan_penunjang' => 'Pemeriksaan Penunjang',
            'spesialisasi' => 'Spesialisasi',
            'keterangan_spesialisasi' => 'Keterangan Spesialisasi',
            'pemeriksaan_okupasi_terapi' => 'Pemeriksaan Okupasi Terapi',
            'aset' => 'Aset',
            'limitasi' => 'Limitasi',
            'diagnosa_terapi_okupasi' => 'Diagnosa Terapi Okupasi',
            'rencana_intervensi' => 'Rencana Intervensi',
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
