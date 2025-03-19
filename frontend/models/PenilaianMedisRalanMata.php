<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_medis_ralan_mata".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string $anamnesis
 * @property string $hubungan
 * @property string $keluhan_utama
 * @property string $rps
 * @property string $rpd
 * @property string $rpo
 * @property string $alergi
 * @property string $status
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $nyeri
 * @property string $bb
 * @property string $visuskanan
 * @property string $visuskiri
 * @property string $cckanan
 * @property string $cckiri
 * @property string $palkanan
 * @property string $palkiri
 * @property string $conkanan
 * @property string $conkiri
 * @property string $corneakanan
 * @property string $corneakiri
 * @property string $coakanan
 * @property string $coakiri
 * @property string $pupilkanan
 * @property string $pupilkiri
 * @property string $lensakanan
 * @property string $lensakiri
 * @property string $funduskanan
 * @property string $funduskiri
 * @property string $papilkanan
 * @property string $papilkiri
 * @property string $retinakanan
 * @property string $retinakiri
 * @property string $makulakanan
 * @property string $makulakiri
 * @property string $tiokanan
 * @property string $tiokiri
 * @property string $mbokanan
 * @property string $mbokiri
 * @property string $lab
 * @property string $rad
 * @property string $penunjang
 * @property string $tes
 * @property string $pemeriksaan
 * @property string $diagnosis
 * @property string $diagnosisbdg
 * @property string $permasalahan
 * @property string $terapi
 * @property string $tindakan
 * @property string $edukasi
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianMedisRalanMata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_medis_ralan_mata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'anamnesis', 'hubungan', 'rps', 'rpo', 'status', 'rr', 'nyeri', 'visuskanan', 'visuskiri', 'cckanan', 'cckiri', 'palkanan', 'palkiri', 'conkanan', 'conkiri', 'corneakanan', 'corneakiri', 'coakanan', 'coakiri', 'pupilkanan', 'pupilkiri', 'lensakanan', 'lensakiri', 'funduskanan', 'funduskiri', 'papilkanan', 'papilkiri', 'retinakanan', 'retinakiri', 'makulakanan', 'makulakiri', 'tiokanan', 'tiokiri', 'mbokanan', 'mbokiri', 'lab', 'rad', 'penunjang', 'tes', 'pemeriksaan', 'diagnosis', 'diagnosisbdg', 'permasalahan', 'terapi', 'tindakan', 'edukasi'], 'required'],
            [['tanggal'], 'safe'],
            [['anamnesis', 'lab', 'rad', 'penunjang', 'tes', 'pemeriksaan', 'permasalahan', 'terapi', 'tindakan'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['hubungan'], 'string', 'max' => 30],
            [['keluhan_utama', 'rps'], 'string', 'max' => 2000],
            [['rpd', 'rpo', 'edukasi'], 'string', 'max' => 1000],
            [['alergi', 'status', 'nyeri'], 'string', 'max' => 50],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'bb'], 'string', 'max' => 5],
            [['visuskanan', 'visuskiri', 'cckanan', 'cckiri', 'palkanan', 'palkiri', 'conkanan', 'conkiri', 'corneakanan', 'corneakiri', 'coakanan', 'coakiri', 'pupilkanan', 'pupilkiri', 'lensakanan', 'lensakiri', 'funduskanan', 'funduskiri', 'papilkanan', 'papilkiri', 'retinakanan', 'retinakiri', 'makulakanan', 'makulakiri', 'tiokanan', 'tiokiri', 'mbokanan', 'mbokiri'], 'string', 'max' => 100],
            [['diagnosis', 'diagnosisbdg'], 'string', 'max' => 500],
            [['no_rawat'], 'unique'],
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
            'no_rawat' => 'No Rawat',
            'tanggal' => 'Tanggal',
            'kd_dokter' => 'Kd Dokter',
            'anamnesis' => 'Anamnesis',
            'hubungan' => 'Hubungan',
            'keluhan_utama' => 'Keluhan Utama',
            'rps' => 'Rps',
            'rpd' => 'Rpd',
            'rpo' => 'Rpo',
            'alergi' => 'Alergi',
            'status' => 'Status',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'nyeri' => 'Nyeri',
            'bb' => 'Bb',
            'visuskanan' => 'Visuskanan',
            'visuskiri' => 'Visuskiri',
            'cckanan' => 'Cckanan',
            'cckiri' => 'Cckiri',
            'palkanan' => 'Palkanan',
            'palkiri' => 'Palkiri',
            'conkanan' => 'Conkanan',
            'conkiri' => 'Conkiri',
            'corneakanan' => 'Corneakanan',
            'corneakiri' => 'Corneakiri',
            'coakanan' => 'Coakanan',
            'coakiri' => 'Coakiri',
            'pupilkanan' => 'Pupilkanan',
            'pupilkiri' => 'Pupilkiri',
            'lensakanan' => 'Lensakanan',
            'lensakiri' => 'Lensakiri',
            'funduskanan' => 'Funduskanan',
            'funduskiri' => 'Funduskiri',
            'papilkanan' => 'Papilkanan',
            'papilkiri' => 'Papilkiri',
            'retinakanan' => 'Retinakanan',
            'retinakiri' => 'Retinakiri',
            'makulakanan' => 'Makulakanan',
            'makulakiri' => 'Makulakiri',
            'tiokanan' => 'Tiokanan',
            'tiokiri' => 'Tiokiri',
            'mbokanan' => 'Mbokanan',
            'mbokiri' => 'Mbokiri',
            'lab' => 'Lab',
            'rad' => 'Rad',
            'penunjang' => 'Penunjang',
            'tes' => 'Tes',
            'pemeriksaan' => 'Pemeriksaan',
            'diagnosis' => 'Diagnosis',
            'diagnosisbdg' => 'Diagnosisbdg',
            'permasalahan' => 'Permasalahan',
            'terapi' => 'Terapi',
            'tindakan' => 'Tindakan',
            'edukasi' => 'Edukasi',
        ];
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
