<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_awal_keperawatan_mata".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $informasi
 * @property string $td
 * @property string $nadi
 * @property string $rr
 * @property string $suhu
 * @property string $gcs
 * @property string $bb
 * @property string $tb
 * @property string $bmi
 * @property string $keluhan_utama
 * @property string $rpd
 * @property string $rps
 * @property string $rpk
 * @property string $rpo
 * @property string $alergi
 * @property string $alat_bantu
 * @property string $ket_bantu
 * @property string $prothesa
 * @property string $ket_pro
 * @property string $adl
 * @property string $status_psiko
 * @property string $ket_psiko
 * @property string $hub_keluarga
 * @property string $tinggal_dengan
 * @property string $ket_tinggal
 * @property string $ekonomi
 * @property string $budaya
 * @property string $ket_budaya
 * @property string $edukasi
 * @property string $ket_edukasi
 * @property string $berjalan_a
 * @property string $berjalan_b
 * @property string $berjalan_c
 * @property string $hasil
 * @property string $lapor
 * @property string $ket_lapor
 * @property string $sg1
 * @property string $nilai1
 * @property string $sg2
 * @property string $nilai2
 * @property string $sg3
 * @property string $nilai3
 * @property string $sg4
 * @property string $nilai4
 * @property int $total_hasil
 * @property string $nyeri
 * @property string $provokes
 * @property string $ket_provokes
 * @property string $quality
 * @property string $ket_quality
 * @property string $lokasi
 * @property string $menyebar
 * @property string $skala_nyeri
 * @property string $durasi
 * @property string $nyeri_hilang
 * @property string $ket_nyeri
 * @property string $pada_dokter
 * @property string $ket_dokter
 * @property string $visuskanan
 * @property string $visuskiri
 * @property string $refraksikanan
 * @property string $refraksikiri
 * @property string $tiokanan
 * @property string $tiokiri
 * @property string $palberakanan
 * @property string $palberakiri
 * @property string $konjungtivakanan
 * @property string $konjungtivakiri
 * @property string $sklerakanan
 * @property string $sklerakiri
 * @property string $korneakanan
 * @property string $korneakiri
 * @property string $bmdkanan
 * @property string $bmdkiri
 * @property string $iriskanan
 * @property string $iriskiri
 * @property string $pupilkanan
 * @property string $pupilkiri
 * @property string $lensakanan
 * @property string $lensakiri
 * @property string $oftalmoskopikanan
 * @property string $oftalmoskopikiri
 * @property string $rencana
 * @property string $nip
 *
 * @property MasterMasalahKeperawatan[] $kodeMasalahs
 * @property Petugas $nip0
 * @property RegPeriksa $noRawat
 * @property PenilaianAwalKeperawatanMataMasalah[] $penilaianAwalKeperawatanMataMasalahs
 */
class PenilaianAwalKeperawatanMata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_awal_keperawatan_mata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'informasi', 'rr', 'gcs', 'bmi', 'rpk', 'rpo', 'alat_bantu', 'prothesa', 'ket_pro', 'adl', 'status_psiko', 'ket_psiko', 'hub_keluarga', 'tinggal_dengan', 'ket_tinggal', 'ekonomi', 'budaya', 'ket_budaya', 'edukasi', 'ket_edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'ket_lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'total_hasil', 'nyeri', 'provokes', 'ket_provokes', 'quality', 'ket_quality', 'lokasi', 'menyebar', 'skala_nyeri', 'durasi', 'nyeri_hilang', 'ket_nyeri', 'pada_dokter', 'ket_dokter', 'visuskanan', 'visuskiri', 'refraksikanan', 'refraksikiri', 'tiokanan', 'tiokiri', 'palberakanan', 'palberakiri', 'konjungtivakanan', 'konjungtivakiri', 'sklerakanan', 'sklerakiri', 'korneakanan', 'korneakiri', 'bmdkanan', 'bmdkiri', 'iriskanan', 'iriskiri', 'pupilkanan', 'pupilkiri', 'lensakanan', 'lensakiri', 'oftalmoskopikanan', 'oftalmoskopikiri', 'rencana', 'nip'], 'required'],
            [['tanggal'], 'safe'],
            [['informasi', 'alat_bantu', 'prothesa', 'adl', 'status_psiko', 'hub_keluarga', 'tinggal_dengan', 'ekonomi', 'budaya', 'edukasi', 'berjalan_a', 'berjalan_b', 'berjalan_c', 'hasil', 'lapor', 'sg1', 'nilai1', 'sg2', 'nilai2', 'sg3', 'nilai3', 'sg4', 'nilai4', 'nyeri', 'provokes', 'quality', 'menyebar', 'skala_nyeri', 'nyeri_hilang', 'pada_dokter'], 'string'],
            [['total_hasil'], 'integer'],
            [['no_rawat'], 'string', 'max' => 17],
            [['td'], 'string', 'max' => 8],
            [['nadi', 'rr', 'suhu', 'gcs', 'bb', 'tb'], 'string', 'max' => 5],
            [['bmi'], 'string', 'max' => 10],
            [['keluhan_utama'], 'string', 'max' => 150],
            [['rpd', 'rps', 'rpk', 'rpo', 'oftalmoskopikanan', 'oftalmoskopikiri', 'rencana'], 'string', 'max' => 100],
            [['alergi', 'durasi'], 'string', 'max' => 25],
            [['ket_bantu', 'ket_pro', 'ket_budaya', 'ket_edukasi', 'ket_quality', 'lokasi'], 'string', 'max' => 50],
            [['ket_psiko'], 'string', 'max' => 70],
            [['ket_tinggal', 'ket_provokes', 'ket_nyeri'], 'string', 'max' => 40],
            [['ket_lapor', 'ket_dokter'], 'string', 'max' => 15],
            [['visuskanan', 'visuskiri', 'refraksikanan', 'refraksikiri', 'tiokanan', 'tiokiri', 'palberakanan', 'palberakiri', 'konjungtivakanan', 'konjungtivakiri', 'sklerakanan', 'sklerakiri', 'korneakanan', 'korneakiri', 'bmdkanan', 'bmdkiri', 'iriskanan', 'iriskiri', 'pupilkanan', 'pupilkiri', 'lensakanan', 'lensakiri', 'nip'], 'string', 'max' => 20],
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
            'informasi' => 'Informasi',
            'td' => 'Td',
            'nadi' => 'Nadi',
            'rr' => 'Rr',
            'suhu' => 'Suhu',
            'gcs' => 'Gcs',
            'bb' => 'Bb',
            'tb' => 'Tb',
            'bmi' => 'Bmi',
            'keluhan_utama' => 'Keluhan Utama',
            'rpd' => 'Rpd',
            'rps' => 'Rps',
            'rpk' => 'Rpk',
            'rpo' => 'Rpo',
            'alergi' => 'Alergi',
            'alat_bantu' => 'Alat Bantu',
            'ket_bantu' => 'Ket Bantu',
            'prothesa' => 'Prothesa',
            'ket_pro' => 'Ket Pro',
            'adl' => 'Adl',
            'status_psiko' => 'Status Psiko',
            'ket_psiko' => 'Ket Psiko',
            'hub_keluarga' => 'Hub Keluarga',
            'tinggal_dengan' => 'Tinggal Dengan',
            'ket_tinggal' => 'Ket Tinggal',
            'ekonomi' => 'Ekonomi',
            'budaya' => 'Budaya',
            'ket_budaya' => 'Ket Budaya',
            'edukasi' => 'Edukasi',
            'ket_edukasi' => 'Ket Edukasi',
            'berjalan_a' => 'Berjalan A',
            'berjalan_b' => 'Berjalan B',
            'berjalan_c' => 'Berjalan C',
            'hasil' => 'Hasil',
            'lapor' => 'Lapor',
            'ket_lapor' => 'Ket Lapor',
            'sg1' => 'Sg1',
            'nilai1' => 'Nilai1',
            'sg2' => 'Sg2',
            'nilai2' => 'Nilai2',
            'sg3' => 'Sg3',
            'nilai3' => 'Nilai3',
            'sg4' => 'Sg4',
            'nilai4' => 'Nilai4',
            'total_hasil' => 'Total Hasil',
            'nyeri' => 'Nyeri',
            'provokes' => 'Provokes',
            'ket_provokes' => 'Ket Provokes',
            'quality' => 'Quality',
            'ket_quality' => 'Ket Quality',
            'lokasi' => 'Lokasi',
            'menyebar' => 'Menyebar',
            'skala_nyeri' => 'Skala Nyeri',
            'durasi' => 'Durasi',
            'nyeri_hilang' => 'Nyeri Hilang',
            'ket_nyeri' => 'Ket Nyeri',
            'pada_dokter' => 'Pada Dokter',
            'ket_dokter' => 'Ket Dokter',
            'visuskanan' => 'Visuskanan',
            'visuskiri' => 'Visuskiri',
            'refraksikanan' => 'Refraksikanan',
            'refraksikiri' => 'Refraksikiri',
            'tiokanan' => 'Tiokanan',
            'tiokiri' => 'Tiokiri',
            'palberakanan' => 'Palberakanan',
            'palberakiri' => 'Palberakiri',
            'konjungtivakanan' => 'Konjungtivakanan',
            'konjungtivakiri' => 'Konjungtivakiri',
            'sklerakanan' => 'Sklerakanan',
            'sklerakiri' => 'Sklerakiri',
            'korneakanan' => 'Korneakanan',
            'korneakiri' => 'Korneakiri',
            'bmdkanan' => 'Bmdkanan',
            'bmdkiri' => 'Bmdkiri',
            'iriskanan' => 'Iriskanan',
            'iriskiri' => 'Iriskiri',
            'pupilkanan' => 'Pupilkanan',
            'pupilkiri' => 'Pupilkiri',
            'lensakanan' => 'Lensakanan',
            'lensakiri' => 'Lensakiri',
            'oftalmoskopikanan' => 'Oftalmoskopikanan',
            'oftalmoskopikiri' => 'Oftalmoskopikiri',
            'rencana' => 'Rencana',
            'nip' => 'Nip',
        ];
    }

    /**
     * Gets query for [[KodeMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKodeMasalahs()
    {
        return $this->hasMany(MasterMasalahKeperawatan::class, ['kode_masalah' => 'kode_masalah'])->viaTable('penilaian_awal_keperawatan_mata_masalah', ['no_rawat' => 'no_rawat']);
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
     * Gets query for [[PenilaianAwalKeperawatanMataMasalahs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianAwalKeperawatanMataMasalahs()
    {
        return $this->hasMany(PenilaianAwalKeperawatanMataMasalah::class, ['no_rawat' => 'no_rawat']);
    }
}
