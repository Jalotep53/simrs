<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_bundle_vap".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $posisi_kepala
 * @property string|null $pengkajian_setiap_hari
 * @property string|null $hand_hygiene
 * @property string|null $oral_hygiene
 * @property string|null $suction_manajemen_sekresi
 * @property string|null $profilaksis_peptic_ulcer
 * @property string|null $dvt_profiklasisi
 * @property string|null $penggunaan_apd_sesuai
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditBundleVap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_bundle_vap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['posisi_kepala', 'pengkajian_setiap_hari', 'hand_hygiene', 'oral_hygiene', 'suction_manajemen_sekresi', 'profilaksis_peptic_ulcer', 'dvt_profiklasisi', 'penggunaan_apd_sesuai'], 'string'],
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
            'posisi_kepala' => 'Posisi Kepala',
            'pengkajian_setiap_hari' => 'Pengkajian Setiap Hari',
            'hand_hygiene' => 'Hand Hygiene',
            'oral_hygiene' => 'Oral Hygiene',
            'suction_manajemen_sekresi' => 'Suction Manajemen Sekresi',
            'profilaksis_peptic_ulcer' => 'Profilaksis Peptic Ulcer',
            'dvt_profiklasisi' => 'Dvt Profiklasisi',
            'penggunaan_apd_sesuai' => 'Penggunaan Apd Sesuai',
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
