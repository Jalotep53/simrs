<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audit_pembuangan_limbah".
 *
 * @property string $tanggal
 * @property string $id_ruang
 * @property string|null $pemisahan_limbah_oleh_penghasil_limbah
 * @property string|null $limbah_infeksius_dimasukkan_kantong_kuning
 * @property string|null $limbah_noninfeksius_dimasukkan_kantong_hitam
 * @property string|null $limbah_tigaperempat_diikat
 * @property string|null $limbah_segera_dibawa_kepembuangan_sementara
 * @property string|null $kotak_sampah_dalam_kondisi_bersih
 * @property string|null $pembersihan_tempat_sampah_dengan_desinfekten
 * @property string|null $pembersihan_penampungan_sementara_dengan_desinfekten
 *
 * @property RuangAuditKepatuhan $ruang
 */
class AuditPembuanganLimbah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audit_pembuangan_limbah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'id_ruang'], 'required'],
            [['tanggal'], 'safe'],
            [['pemisahan_limbah_oleh_penghasil_limbah', 'limbah_infeksius_dimasukkan_kantong_kuning', 'limbah_noninfeksius_dimasukkan_kantong_hitam', 'limbah_tigaperempat_diikat', 'limbah_segera_dibawa_kepembuangan_sementara', 'kotak_sampah_dalam_kondisi_bersih', 'pembersihan_tempat_sampah_dengan_desinfekten', 'pembersihan_penampungan_sementara_dengan_desinfekten'], 'string'],
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
            'pemisahan_limbah_oleh_penghasil_limbah' => 'Pemisahan Limbah Oleh Penghasil Limbah',
            'limbah_infeksius_dimasukkan_kantong_kuning' => 'Limbah Infeksius Dimasukkan Kantong Kuning',
            'limbah_noninfeksius_dimasukkan_kantong_hitam' => 'Limbah Noninfeksius Dimasukkan Kantong Hitam',
            'limbah_tigaperempat_diikat' => 'Limbah Tigaperempat Diikat',
            'limbah_segera_dibawa_kepembuangan_sementara' => 'Limbah Segera Dibawa Kepembuangan Sementara',
            'kotak_sampah_dalam_kondisi_bersih' => 'Kotak Sampah Dalam Kondisi Bersih',
            'pembersihan_tempat_sampah_dengan_desinfekten' => 'Pembersihan Tempat Sampah Dengan Desinfekten',
            'pembersihan_penampungan_sementara_dengan_desinfekten' => 'Pembersihan Penampungan Sementara Dengan Desinfekten',
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
