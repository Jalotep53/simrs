<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "telaah_farmasi".
 *
 * @property string $no_resep
 * @property string|null $resep_identifikasi_pasien
 * @property string|null $resep_ket_identifikasi_pasien
 * @property string|null $resep_tepat_obat
 * @property string|null $resep_ket_tepat_obat
 * @property string|null $resep_tepat_dosis
 * @property string|null $resep_ket_tepat_dosis
 * @property string|null $resep_tepat_cara_pemberian
 * @property string|null $resep_ket_tepat_cara_pemberian
 * @property string|null $resep_tepat_waktu_pemberian
 * @property string|null $resep_ket_tepat_waktu_pemberian
 * @property string|null $resep_ada_tidak_duplikasi_obat
 * @property string|null $resep_ket_ada_tidak_duplikasi_obat
 * @property string|null $resep_interaksi_obat
 * @property string|null $resep_ket_interaksi_obat
 * @property string|null $resep_kontra_indikasi_obat
 * @property string|null $resep_ket_kontra_indikasi_obat
 * @property string|null $obat_tepat_pasien
 * @property string|null $obat_tepat_obat
 * @property string|null $obat_tepat_dosis
 * @property string|null $obat_tepat_cara_pemberian
 * @property string|null $obat_tepat_waktu_pemberian
 * @property string|null $nip
 *
 * @property Petugas $nip0
 * @property ResepObat $noResep
 */
class TelaahFarmasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telaah_farmasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_resep'], 'required'],
            [['resep_identifikasi_pasien', 'resep_tepat_obat', 'resep_tepat_dosis', 'resep_tepat_cara_pemberian', 'resep_tepat_waktu_pemberian', 'resep_ada_tidak_duplikasi_obat', 'resep_interaksi_obat', 'resep_kontra_indikasi_obat', 'obat_tepat_pasien', 'obat_tepat_obat', 'obat_tepat_dosis', 'obat_tepat_cara_pemberian', 'obat_tepat_waktu_pemberian'], 'string'],
            [['no_resep'], 'string', 'max' => 14],
            [['resep_ket_identifikasi_pasien', 'resep_ket_tepat_obat', 'resep_ket_tepat_dosis', 'resep_ket_tepat_cara_pemberian', 'resep_ket_tepat_waktu_pemberian', 'resep_ket_ada_tidak_duplikasi_obat', 'resep_ket_interaksi_obat', 'resep_ket_kontra_indikasi_obat'], 'string', 'max' => 30],
            [['nip'], 'string', 'max' => 20],
            [['no_resep'], 'unique'],
            [['no_resep'], 'exist', 'skipOnError' => true, 'targetClass' => ResepObat::class, 'targetAttribute' => ['no_resep' => 'no_resep']],
            [['nip'], 'exist', 'skipOnError' => true, 'targetClass' => Petugas::class, 'targetAttribute' => ['nip' => 'nip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_resep' => 'No Resep',
            'resep_identifikasi_pasien' => 'Resep Identifikasi Pasien',
            'resep_ket_identifikasi_pasien' => 'Resep Ket Identifikasi Pasien',
            'resep_tepat_obat' => 'Resep Tepat Obat',
            'resep_ket_tepat_obat' => 'Resep Ket Tepat Obat',
            'resep_tepat_dosis' => 'Resep Tepat Dosis',
            'resep_ket_tepat_dosis' => 'Resep Ket Tepat Dosis',
            'resep_tepat_cara_pemberian' => 'Resep Tepat Cara Pemberian',
            'resep_ket_tepat_cara_pemberian' => 'Resep Ket Tepat Cara Pemberian',
            'resep_tepat_waktu_pemberian' => 'Resep Tepat Waktu Pemberian',
            'resep_ket_tepat_waktu_pemberian' => 'Resep Ket Tepat Waktu Pemberian',
            'resep_ada_tidak_duplikasi_obat' => 'Resep Ada Tidak Duplikasi Obat',
            'resep_ket_ada_tidak_duplikasi_obat' => 'Resep Ket Ada Tidak Duplikasi Obat',
            'resep_interaksi_obat' => 'Resep Interaksi Obat',
            'resep_ket_interaksi_obat' => 'Resep Ket Interaksi Obat',
            'resep_kontra_indikasi_obat' => 'Resep Kontra Indikasi Obat',
            'resep_ket_kontra_indikasi_obat' => 'Resep Ket Kontra Indikasi Obat',
            'obat_tepat_pasien' => 'Obat Tepat Pasien',
            'obat_tepat_obat' => 'Obat Tepat Obat',
            'obat_tepat_dosis' => 'Obat Tepat Dosis',
            'obat_tepat_cara_pemberian' => 'Obat Tepat Cara Pemberian',
            'obat_tepat_waktu_pemberian' => 'Obat Tepat Waktu Pemberian',
            'nip' => 'Nip',
        ];
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
     * Gets query for [[NoResep]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoResep()
    {
        return $this->hasOne(ResepObat::class, ['no_resep' => 'no_resep']);
    }
}
