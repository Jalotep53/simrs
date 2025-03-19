<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_service_ranap_piutang".
 *
 * @property string $nama_service
 * @property float|null $besar
 * @property string|null $laborat
 * @property string|null $radiologi
 * @property string|null $operasi
 * @property string|null $obat
 * @property string|null $ranap_dokter
 * @property string|null $ranap_paramedis
 * @property string|null $ralan_dokter
 * @property string|null $ralan_paramedis
 * @property string|null $tambahan
 * @property string|null $potongan
 * @property string|null $kamar
 * @property string|null $registrasi
 * @property string|null $harian
 * @property string|null $retur_Obat
 * @property string|null $resep_Pulang
 */
class SetServiceRanapPiutang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_service_ranap_piutang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_service'], 'required'],
            [['besar'], 'number'],
            [['laborat', 'radiologi', 'operasi', 'obat', 'ranap_dokter', 'ranap_paramedis', 'ralan_dokter', 'ralan_paramedis', 'tambahan', 'potongan', 'kamar', 'registrasi', 'harian', 'retur_Obat', 'resep_Pulang'], 'string'],
            [['nama_service'], 'string', 'max' => 100],
            [['nama_service'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_service' => 'Nama Service',
            'besar' => 'Besar',
            'laborat' => 'Laborat',
            'radiologi' => 'Radiologi',
            'operasi' => 'Operasi',
            'obat' => 'Obat',
            'ranap_dokter' => 'Ranap Dokter',
            'ranap_paramedis' => 'Ranap Paramedis',
            'ralan_dokter' => 'Ralan Dokter',
            'ralan_paramedis' => 'Ralan Paramedis',
            'tambahan' => 'Tambahan',
            'potongan' => 'Potongan',
            'kamar' => 'Kamar',
            'registrasi' => 'Registrasi',
            'harian' => 'Harian',
            'retur_Obat' => 'Retur Obat',
            'resep_Pulang' => 'Resep Pulang',
        ];
    }
}
