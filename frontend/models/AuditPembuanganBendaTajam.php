<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_pembuangan_benda_tajam".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $setiap_injeksi_needle_langsung_dimasukkan_safety_box
 * @property string|null $setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box
 * @property string|null $setiap_benda_tajam_jarum_dimasukkan_safety_box
 * @property string|null $safety_box_tigaperempat_diganti
 * @property string|null $safety_box_keadaan_bersih
 * @property string|null $saftey_box_tertutup_setelah_digunakan
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditPembuanganBendaTajam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_pembuangan_benda_tajam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['setiap_injeksi_needle_langsung_dimasukkan_safety_box', 'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box', 'setiap_benda_tajam_jarum_dimasukkan_safety_box', 'safety_box_tigaperempat_diganti', 'safety_box_keadaan_bersih', 'saftey_box_tertutup_setelah_digunakan'], 'string'],
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
            'setiap_injeksi_needle_langsung_dimasukkan_safety_box' => 'Setiap Injeksi Needle Langsung Dimasukkan Safety Box',
            'setiap_pemasangan_iv_canula_langsung_dimasukkan_safety_box' => 'Setiap Pemasangan Iv Canula Langsung Dimasukkan Safety Box',
            'setiap_benda_tajam_jarum_dimasukkan_safety_box' => 'Setiap Benda Tajam Jarum Dimasukkan Safety Box',
            'safety_box_tigaperempat_diganti' => 'Safety Box Tigaperempat Diganti',
            'safety_box_keadaan_bersih' => 'Safety Box Keadaan Bersih',
            'saftey_box_tertutup_setelah_digunakan' => 'Saftey Box Tertutup Setelah Digunakan',
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
