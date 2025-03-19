<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pre_anestesi".
 *
 * @property string $no_rawat
 * @property string $tanggal
 * @property string $kd_dokter
 * @property string|null $tanggal_operasi
 * @property string|null $diagnosa
 * @property string|null $rencana_tindakan
 * @property string $tb
 * @property string $bb
 * @property string $td
 * @property string $io2
 * @property string $nadi
 * @property string $pernapasan
 * @property string $suhu
 * @property string|null $fisik_cardiovasculer
 * @property string|null $fisik_paru
 * @property string|null $fisik_abdomen
 * @property string|null $fisik_extrimitas
 * @property string|null $fisik_endokrin
 * @property string|null $fisik_ginjal
 * @property string|null $fisik_obatobatan
 * @property string|null $fisik_laborat
 * @property string|null $fisik_penunjang
 * @property string|null $riwayat_penyakit_alergiobat
 * @property string|null $riwayat_penyakit_alergilainnya
 * @property string|null $riwayat_penyakit_terapi
 * @property string $riwayat_kebiasaan_merokok
 * @property string $riwayat_kebiasaan_ket_merokok
 * @property string $riwayat_kebiasaan_alkohol
 * @property string $riwayat_kebiasaan_ket_alkohol
 * @property string $riwayat_kebiasaan_obat
 * @property string $riwayat_kebiasaan_ket_obat
 * @property string|null $riwayat_medis_cardiovasculer
 * @property string|null $riwayat_medis_respiratory
 * @property string|null $riwayat_medis_endocrine
 * @property string|null $riwayat_medis_lainnya
 * @property string|null $asa
 * @property string|null $puasa
 * @property string|null $rencana_anestesi
 * @property string|null $rencana_perawatan
 * @property string|null $catatan_khusus
 *
 * @property Dokter $kdDokter
 * @property RegPeriksa $noRawat
 */
class PenilaianPreAnestesi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pre_anestesi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tanggal', 'kd_dokter', 'io2', 'pernapasan', 'riwayat_kebiasaan_merokok', 'riwayat_kebiasaan_ket_merokok', 'riwayat_kebiasaan_alkohol', 'riwayat_kebiasaan_ket_alkohol', 'riwayat_kebiasaan_obat', 'riwayat_kebiasaan_ket_obat'], 'required'],
            [['tanggal', 'tanggal_operasi', 'puasa'], 'safe'],
            [['riwayat_kebiasaan_merokok', 'riwayat_kebiasaan_alkohol', 'riwayat_kebiasaan_obat', 'asa', 'rencana_anestesi'], 'string'],
            [['no_rawat'], 'string', 'max' => 17],
            [['kd_dokter'], 'string', 'max' => 20],
            [['diagnosa', 'rencana_tindakan', 'fisik_cardiovasculer', 'fisik_paru', 'fisik_abdomen', 'fisik_extrimitas', 'fisik_endokrin', 'fisik_ginjal', 'fisik_obatobatan', 'fisik_laborat', 'fisik_penunjang', 'riwayat_penyakit_terapi', 'riwayat_kebiasaan_ket_obat', 'riwayat_medis_cardiovasculer', 'riwayat_medis_respiratory', 'riwayat_medis_endocrine', 'riwayat_medis_lainnya', 'catatan_khusus'], 'string', 'max' => 100],
            [['tb', 'bb', 'io2', 'nadi', 'pernapasan', 'suhu', 'riwayat_kebiasaan_ket_merokok', 'riwayat_kebiasaan_ket_alkohol'], 'string', 'max' => 5],
            [['td'], 'string', 'max' => 8],
            [['riwayat_penyakit_alergiobat', 'riwayat_penyakit_alergilainnya'], 'string', 'max' => 50],
            [['rencana_perawatan'], 'string', 'max' => 40],
            [['no_rawat', 'tanggal'], 'unique', 'targetAttribute' => ['no_rawat', 'tanggal']],
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
            'tanggal_operasi' => 'Tanggal Operasi',
            'diagnosa' => 'Diagnosa',
            'rencana_tindakan' => 'Rencana Tindakan',
            'tb' => 'Tb',
            'bb' => 'Bb',
            'td' => 'Td',
            'io2' => 'Io2',
            'nadi' => 'Nadi',
            'pernapasan' => 'Pernapasan',
            'suhu' => 'Suhu',
            'fisik_cardiovasculer' => 'Fisik Cardiovasculer',
            'fisik_paru' => 'Fisik Paru',
            'fisik_abdomen' => 'Fisik Abdomen',
            'fisik_extrimitas' => 'Fisik Extrimitas',
            'fisik_endokrin' => 'Fisik Endokrin',
            'fisik_ginjal' => 'Fisik Ginjal',
            'fisik_obatobatan' => 'Fisik Obatobatan',
            'fisik_laborat' => 'Fisik Laborat',
            'fisik_penunjang' => 'Fisik Penunjang',
            'riwayat_penyakit_alergiobat' => 'Riwayat Penyakit Alergiobat',
            'riwayat_penyakit_alergilainnya' => 'Riwayat Penyakit Alergilainnya',
            'riwayat_penyakit_terapi' => 'Riwayat Penyakit Terapi',
            'riwayat_kebiasaan_merokok' => 'Riwayat Kebiasaan Merokok',
            'riwayat_kebiasaan_ket_merokok' => 'Riwayat Kebiasaan Ket Merokok',
            'riwayat_kebiasaan_alkohol' => 'Riwayat Kebiasaan Alkohol',
            'riwayat_kebiasaan_ket_alkohol' => 'Riwayat Kebiasaan Ket Alkohol',
            'riwayat_kebiasaan_obat' => 'Riwayat Kebiasaan Obat',
            'riwayat_kebiasaan_ket_obat' => 'Riwayat Kebiasaan Ket Obat',
            'riwayat_medis_cardiovasculer' => 'Riwayat Medis Cardiovasculer',
            'riwayat_medis_respiratory' => 'Riwayat Medis Respiratory',
            'riwayat_medis_endocrine' => 'Riwayat Medis Endocrine',
            'riwayat_medis_lainnya' => 'Riwayat Medis Lainnya',
            'asa' => 'Asa',
            'puasa' => 'Puasa',
            'rencana_anestesi' => 'Rencana Anestesi',
            'rencana_perawatan' => 'Rencana Perawatan',
            'catatan_khusus' => 'Catatan Khusus',
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
