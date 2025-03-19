<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_penanganan_darah".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $menggunakan_apd_waktu_membuang_darah
 * @property string|null $komponen_darah_tidak_ada_dilantai
 * @property string|null $membuang_darah_pada_tempat_ditentukan
 * @property string|null $pembersihan_areal_tumbahan_darah
 * @property string|null $apd_dibuang_di_limbah_infeksius
 * @property string|null $melakukan_kebersihan_tangan_setelah_prosedur
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditPenangananDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_penanganan_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['menggunakan_apd_waktu_membuang_darah', 'komponen_darah_tidak_ada_dilantai', 'membuang_darah_pada_tempat_ditentukan', 'pembersihan_areal_tumbahan_darah', 'apd_dibuang_di_limbah_infeksius', 'melakukan_kebersihan_tangan_setelah_prosedur'], 'string'],
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
            'menggunakan_apd_waktu_membuang_darah' => 'Menggunakan Apd Waktu Membuang Darah',
            'komponen_darah_tidak_ada_dilantai' => 'Komponen Darah Tidak Ada Dilantai',
            'membuang_darah_pada_tempat_ditentukan' => 'Membuang Darah Pada Tempat Ditentukan',
            'pembersihan_areal_tumbahan_darah' => 'Pembersihan Areal Tumbahan Darah',
            'apd_dibuang_di_limbah_infeksius' => 'Apd Dibuang Di Limbah Infeksius',
            'melakukan_kebersihan_tangan_setelah_prosedur' => 'Melakukan Kebersihan Tangan Setelah Prosedur',
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
