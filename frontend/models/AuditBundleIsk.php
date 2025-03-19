<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_bundle_isk".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $pemasangan_sesuai_indikasi
 * @property string|null $hand_hygiene
 * @property string|null $menggunakan_apd_yang_tepat
 * @property string|null $pemasangan_menggunakan_alat_steril
 * @property string|null $segera_dilepas_setelah_tidak_diperlukan
 * @property string|null $pengisian_balon_sesuai_petunjuk
 * @property string|null $fiksasi_kateter_dengan_plester
 * @property string|null $urinebag_menggantung_tidak_menyentuh_lantai
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditBundleIsk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_bundle_isk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['pemasangan_sesuai_indikasi', 'hand_hygiene', 'menggunakan_apd_yang_tepat', 'pemasangan_menggunakan_alat_steril', 'segera_dilepas_setelah_tidak_diperlukan', 'pengisian_balon_sesuai_petunjuk', 'fiksasi_kateter_dengan_plester', 'urinebag_menggantung_tidak_menyentuh_lantai'], 'string'],
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
            'pemasangan_sesuai_indikasi' => 'Pemasangan Sesuai Indikasi',
            'hand_hygiene' => 'Hand Hygiene',
            'menggunakan_apd_yang_tepat' => 'Menggunakan Apd Yang Tepat',
            'pemasangan_menggunakan_alat_steril' => 'Pemasangan Menggunakan Alat Steril',
            'segera_dilepas_setelah_tidak_diperlukan' => 'Segera Dilepas Setelah Tidak Diperlukan',
            'pengisian_balon_sesuai_petunjuk' => 'Pengisian Balon Sesuai Petunjuk',
            'fiksasi_kateter_dengan_plester' => 'Fiksasi Kateter Dengan Plester',
            'urinebag_menggantung_tidak_menyentuh_lantai' => 'Urinebag Menggantung Tidak Menyentuh Lantai',
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
