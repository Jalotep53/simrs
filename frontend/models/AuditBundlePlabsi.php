<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_bundle_plabsi".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $sebelum_melakukan_hand_hygiene
 * @property string|null $menggunakan_apd_lengkap
 * @property string|null $lokasi_pemasangan_sesuai
 * @property string|null $alat_yang_digunakan_steril
 * @property string|null $pembersihan_kulit
 * @property string|null $setelah_melakukan_hand_hygiene
 * @property string|null $perawatan_dressing_infus
 * @property string|null $spoit_yang_digunakan_disposible
 * @property string|null $memberi_tanggal_dan_jam_pemasangan_infus
 * @property string|null $set_infus_setiap_72jam
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditBundlePlabsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_bundle_plabsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['sebelum_melakukan_hand_hygiene', 'menggunakan_apd_lengkap', 'lokasi_pemasangan_sesuai', 'alat_yang_digunakan_steril', 'pembersihan_kulit', 'setelah_melakukan_hand_hygiene', 'perawatan_dressing_infus', 'spoit_yang_digunakan_disposible', 'memberi_tanggal_dan_jam_pemasangan_infus', 'set_infus_setiap_72jam'], 'string'],
            [['id_ruang'], 'string', 'max' => 5],
            [['tanggal', 'id_ruang'], 'unique', 'targetAttribute' => ['tanggal', 'id_ruang']],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => RuangAuditKepatuhan::class, 'targetAttribute' => ['id_ruang' => 'id_ruang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'id_ruang' => 'Id Ruang',
            'sebelum_melakukan_hand_hygiene' => 'Sebelum Melakukan Hand Hygiene',
            'menggunakan_apd_lengkap' => 'Menggunakan Apd Lengkap',
            'lokasi_pemasangan_sesuai' => 'Lokasi Pemasangan Sesuai',
            'alat_yang_digunakan_steril' => 'Alat Yang Digunakan Steril',
            'pembersihan_kulit' => 'Pembersihan Kulit',
            'setelah_melakukan_hand_hygiene' => 'Setelah Melakukan Hand Hygiene',
            'perawatan_dressing_infus' => 'Perawatan Dressing Infus',
            'spoit_yang_digunakan_disposible' => 'Spoit Yang Digunakan Disposible',
            'memberi_tanggal_dan_jam_pemasangan_infus' => 'Memberi Tanggal Dan Jam Pemasangan Infus',
            'set_infus_setiap_72jam' => 'Set Infus Setiap 72jam',
        ];
    }

    /**
     * Gets query for [[Ruang]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRuang()
    {
        return $this->hasOne(RuangAuditKepatuhan::class, ['id_ruang' => 'id_ruang']);
    }
}
