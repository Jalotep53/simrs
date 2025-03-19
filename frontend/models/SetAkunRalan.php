<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_ralan".
 *
 * @property string $Suspen_Piutang_Tindakan_Ralan
 * @property string|null $Tindakan_Ralan
 * @property string|null $Beban_Jasa_Medik_Dokter_Tindakan_Ralan
 * @property string|null $Utang_Jasa_Medik_Dokter_Tindakan_Ralan
 * @property string|null $Beban_Jasa_Medik_Paramedis_Tindakan_Ralan
 * @property string|null $Utang_Jasa_Medik_Paramedis_Tindakan_Ralan
 * @property string $Beban_KSO_Tindakan_Ralan
 * @property string $Utang_KSO_Tindakan_Ralan
 * @property string|null $Beban_Jasa_Sarana_Tindakan_Ralan
 * @property string|null $Utang_Jasa_Sarana_Tindakan_Ralan
 * @property string|null $HPP_BHP_Tindakan_Ralan
 * @property string|null $Persediaan_BHP_Tindakan_Ralan
 * @property string|null $Beban_Jasa_Menejemen_Tindakan_Ralan
 * @property string|null $Utang_Jasa_Menejemen_Tindakan_Ralan
 * @property string $Suspen_Piutang_Laborat_Ralan
 * @property string|null $Laborat_Ralan
 * @property string|null $Beban_Jasa_Medik_Dokter_Laborat_Ralan
 * @property string|null $Utang_Jasa_Medik_Dokter_Laborat_Ralan
 * @property string|null $Beban_Jasa_Medik_Petugas_Laborat_Ralan
 * @property string|null $Utang_Jasa_Medik_Petugas_Laborat_Ralan
 * @property string|null $Beban_Kso_Laborat_Ralan
 * @property string|null $Utang_Kso_Laborat_Ralan
 * @property string|null $HPP_Persediaan_Laborat_Rawat_Jalan
 * @property string|null $Persediaan_BHP_Laborat_Rawat_Jalan
 * @property string $Beban_Jasa_Sarana_Laborat_Ralan
 * @property string $Utang_Jasa_Sarana_Laborat_Ralan
 * @property string $Beban_Jasa_Perujuk_Laborat_Ralan
 * @property string $Utang_Jasa_Perujuk_Laborat_Ralan
 * @property string $Beban_Jasa_Menejemen_Laborat_Ralan
 * @property string $Utang_Jasa_Menejemen_Laborat_Ralan
 * @property string $Suspen_Piutang_Radiologi_Ralan
 * @property string|null $Radiologi_Ralan
 * @property string $Beban_Jasa_Medik_Dokter_Radiologi_Ralan
 * @property string $Utang_Jasa_Medik_Dokter_Radiologi_Ralan
 * @property string $Beban_Jasa_Medik_Petugas_Radiologi_Ralan
 * @property string $Utang_Jasa_Medik_Petugas_Radiologi_Ralan
 * @property string $Beban_Kso_Radiologi_Ralan
 * @property string $Utang_Kso_Radiologi_Ralan
 * @property string $HPP_Persediaan_Radiologi_Rawat_Jalan
 * @property string $Persediaan_BHP_Radiologi_Rawat_Jalan
 * @property string $Beban_Jasa_Sarana_Radiologi_Ralan
 * @property string $Utang_Jasa_Sarana_Radiologi_Ralan
 * @property string $Beban_Jasa_Perujuk_Radiologi_Ralan
 * @property string $Utang_Jasa_Perujuk_Radiologi_Ralan
 * @property string $Beban_Jasa_Menejemen_Radiologi_Ralan
 * @property string $Utang_Jasa_Menejemen_Radiologi_Ralan
 * @property string $Suspen_Piutang_Obat_Ralan
 * @property string|null $Obat_Ralan
 * @property string $HPP_Obat_Rawat_Jalan
 * @property string $Persediaan_Obat_Rawat_Jalan
 * @property string|null $Registrasi_Ralan
 * @property string $Suspen_Piutang_Operasi_Ralan
 * @property string|null $Operasi_Ralan
 * @property string $Beban_Jasa_Medik_Dokter_Operasi_Ralan
 * @property string $Utang_Jasa_Medik_Dokter_Operasi_Ralan
 * @property string $Beban_Jasa_Medik_Paramedis_Operasi_Ralan
 * @property string $Utang_Jasa_Medik_Paramedis_Operasi_Ralan
 * @property string $HPP_Obat_Operasi_Ralan
 * @property string $Persediaan_Obat_Kamar_Operasi_Ralan
 * @property string|null $Tambahan_Ralan
 * @property string|null $Potongan_Ralan
 *
 * @property Rekening $bebanJasaMedikDokterLaboratRalan
 * @property Rekening $bebanJasaMedikDokterOperasiRalan
 * @property Rekening $bebanJasaMedikDokterRadiologiRalan
 * @property Rekening $bebanJasaMedikDokterTindakanRalan
 * @property Rekening $bebanJasaMedikParamedisOperasiRalan
 * @property Rekening $bebanJasaMedikParamedisTindakanRalan
 * @property Rekening $bebanJasaMedikPetugasLaboratRalan
 * @property Rekening $bebanJasaMedikPetugasRadiologiRalan
 * @property Rekening $bebanJasaMenejemenLaboratRalan
 * @property Rekening $bebanJasaMenejemenRadiologiRalan
 * @property Rekening $bebanJasaMenejemenTindakanRalan
 * @property Rekening $bebanJasaPerujukLaboratRalan
 * @property Rekening $bebanJasaPerujukRadiologiRalan
 * @property Rekening $bebanJasaSaranaLaboratRalan
 * @property Rekening $bebanJasaSaranaRadiologiRalan
 * @property Rekening $bebanJasaSaranaTindakanRalan
 * @property Rekening $bebanKSOTindakanRalan
 * @property Rekening $bebanKsoLaboratRalan
 * @property Rekening $bebanKsoRadiologiRalan
 * @property Rekening $hPPBHPTindakanRalan
 * @property Rekening $hPPObatOperasiRalan
 * @property Rekening $hPPObatRawatJalan
 * @property Rekening $hPPPersediaanLaboratRawatJalan
 * @property Rekening $hPPPersediaanRadiologiRawatJalan
 * @property Rekening $laboratRalan
 * @property Rekening $obatRalan
 * @property Rekening $operasiRalan
 * @property Rekening $persediaanBHPLaboratRawatJalan
 * @property Rekening $persediaanBHPRadiologiRawatJalan
 * @property Rekening $persediaanBHPTindakanRalan
 * @property Rekening $persediaanObatKamarOperasiRalan
 * @property Rekening $persediaanObatRawatJalan
 * @property Rekening $potonganRalan
 * @property Rekening $radiologiRalan
 * @property Rekening $registrasiRalan
 * @property Rekening $suspenPiutangLaboratRalan
 * @property Rekening $suspenPiutangObatRalan
 * @property Rekening $suspenPiutangOperasiRalan
 * @property Rekening $suspenPiutangRadiologiRalan
 * @property Rekening $suspenPiutangTindakanRalan
 * @property Rekening $tambahanRalan
 * @property Rekening $tindakanRalan
 * @property Rekening $utangJasaMedikDokterLaboratRalan
 * @property Rekening $utangJasaMedikDokterOperasiRalan
 * @property Rekening $utangJasaMedikDokterRadiologiRalan
 * @property Rekening $utangJasaMedikDokterTindakanRalan
 * @property Rekening $utangJasaMedikParamedisOperasiRalan
 * @property Rekening $utangJasaMedikParamedisTindakanRalan
 * @property Rekening $utangJasaMedikPetugasLaboratRalan
 * @property Rekening $utangJasaMedikPetugasRadiologiRalan
 * @property Rekening $utangJasaMenejemenLaboratRalan
 * @property Rekening $utangJasaMenejemenRadiologiRalan
 * @property Rekening $utangJasaMenejemenTindakanRalan
 * @property Rekening $utangJasaPerujukLaboratRalan
 * @property Rekening $utangJasaPerujukRadiologiRalan
 * @property Rekening $utangJasaSaranaLaboratRalan
 * @property Rekening $utangJasaSaranaRadiologiRalan
 * @property Rekening $utangJasaSaranaTindakanRalan
 * @property Rekening $utangKSOTindakanRalan
 * @property Rekening $utangKsoLaboratRalan
 * @property Rekening $utangKsoRadiologiRalan
 */
class SetAkunRalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_ralan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Suspen_Piutang_Tindakan_Ralan', 'Beban_KSO_Tindakan_Ralan', 'Utang_KSO_Tindakan_Ralan', 'Suspen_Piutang_Laborat_Ralan', 'Beban_Jasa_Sarana_Laborat_Ralan', 'Utang_Jasa_Sarana_Laborat_Ralan', 'Beban_Jasa_Perujuk_Laborat_Ralan', 'Utang_Jasa_Perujuk_Laborat_Ralan', 'Beban_Jasa_Menejemen_Laborat_Ralan', 'Utang_Jasa_Menejemen_Laborat_Ralan', 'Suspen_Piutang_Radiologi_Ralan', 'Beban_Jasa_Medik_Dokter_Radiologi_Ralan', 'Utang_Jasa_Medik_Dokter_Radiologi_Ralan', 'Beban_Jasa_Medik_Petugas_Radiologi_Ralan', 'Utang_Jasa_Medik_Petugas_Radiologi_Ralan', 'Beban_Kso_Radiologi_Ralan', 'Utang_Kso_Radiologi_Ralan', 'HPP_Persediaan_Radiologi_Rawat_Jalan', 'Persediaan_BHP_Radiologi_Rawat_Jalan', 'Beban_Jasa_Sarana_Radiologi_Ralan', 'Utang_Jasa_Sarana_Radiologi_Ralan', 'Beban_Jasa_Perujuk_Radiologi_Ralan', 'Utang_Jasa_Perujuk_Radiologi_Ralan', 'Beban_Jasa_Menejemen_Radiologi_Ralan', 'Utang_Jasa_Menejemen_Radiologi_Ralan', 'Suspen_Piutang_Obat_Ralan', 'HPP_Obat_Rawat_Jalan', 'Persediaan_Obat_Rawat_Jalan', 'Suspen_Piutang_Operasi_Ralan', 'Beban_Jasa_Medik_Dokter_Operasi_Ralan', 'Utang_Jasa_Medik_Dokter_Operasi_Ralan', 'Beban_Jasa_Medik_Paramedis_Operasi_Ralan', 'Utang_Jasa_Medik_Paramedis_Operasi_Ralan', 'HPP_Obat_Operasi_Ralan', 'Persediaan_Obat_Kamar_Operasi_Ralan'], 'required'],
            [['Suspen_Piutang_Tindakan_Ralan', 'Tindakan_Ralan', 'Beban_Jasa_Medik_Dokter_Tindakan_Ralan', 'Utang_Jasa_Medik_Dokter_Tindakan_Ralan', 'Beban_Jasa_Medik_Paramedis_Tindakan_Ralan', 'Utang_Jasa_Medik_Paramedis_Tindakan_Ralan', 'Beban_KSO_Tindakan_Ralan', 'Utang_KSO_Tindakan_Ralan', 'Beban_Jasa_Sarana_Tindakan_Ralan', 'Utang_Jasa_Sarana_Tindakan_Ralan', 'HPP_BHP_Tindakan_Ralan', 'Persediaan_BHP_Tindakan_Ralan', 'Beban_Jasa_Menejemen_Tindakan_Ralan', 'Utang_Jasa_Menejemen_Tindakan_Ralan', 'Suspen_Piutang_Laborat_Ralan', 'Laborat_Ralan', 'Beban_Jasa_Medik_Dokter_Laborat_Ralan', 'Utang_Jasa_Medik_Dokter_Laborat_Ralan', 'Beban_Jasa_Medik_Petugas_Laborat_Ralan', 'Utang_Jasa_Medik_Petugas_Laborat_Ralan', 'Beban_Kso_Laborat_Ralan', 'Utang_Kso_Laborat_Ralan', 'HPP_Persediaan_Laborat_Rawat_Jalan', 'Persediaan_BHP_Laborat_Rawat_Jalan', 'Beban_Jasa_Sarana_Laborat_Ralan', 'Utang_Jasa_Sarana_Laborat_Ralan', 'Beban_Jasa_Perujuk_Laborat_Ralan', 'Utang_Jasa_Perujuk_Laborat_Ralan', 'Beban_Jasa_Menejemen_Laborat_Ralan', 'Utang_Jasa_Menejemen_Laborat_Ralan', 'Suspen_Piutang_Radiologi_Ralan', 'Radiologi_Ralan', 'Beban_Jasa_Medik_Dokter_Radiologi_Ralan', 'Utang_Jasa_Medik_Dokter_Radiologi_Ralan', 'Beban_Jasa_Medik_Petugas_Radiologi_Ralan', 'Utang_Jasa_Medik_Petugas_Radiologi_Ralan', 'Beban_Kso_Radiologi_Ralan', 'Utang_Kso_Radiologi_Ralan', 'HPP_Persediaan_Radiologi_Rawat_Jalan', 'Persediaan_BHP_Radiologi_Rawat_Jalan', 'Beban_Jasa_Sarana_Radiologi_Ralan', 'Utang_Jasa_Sarana_Radiologi_Ralan', 'Beban_Jasa_Perujuk_Radiologi_Ralan', 'Utang_Jasa_Perujuk_Radiologi_Ralan', 'Beban_Jasa_Menejemen_Radiologi_Ralan', 'Utang_Jasa_Menejemen_Radiologi_Ralan', 'Suspen_Piutang_Obat_Ralan', 'Obat_Ralan', 'HPP_Obat_Rawat_Jalan', 'Persediaan_Obat_Rawat_Jalan', 'Registrasi_Ralan', 'Suspen_Piutang_Operasi_Ralan', 'Operasi_Ralan', 'Beban_Jasa_Medik_Dokter_Operasi_Ralan', 'Utang_Jasa_Medik_Dokter_Operasi_Ralan', 'Beban_Jasa_Medik_Paramedis_Operasi_Ralan', 'Utang_Jasa_Medik_Paramedis_Operasi_Ralan', 'HPP_Obat_Operasi_Ralan', 'Persediaan_Obat_Kamar_Operasi_Ralan', 'Tambahan_Ralan', 'Potongan_Ralan'], 'string', 'max' => 15],
            [['Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Tindakan_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Laborat_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Petugas_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Petugas_Laborat_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Petugas_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Petugas_Laborat_Ralan' => 'kd_rek']],
            [['Beban_Kso_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Kso_Laborat_Ralan' => 'kd_rek']],
            [['Utang_Kso_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Kso_Laborat_Ralan' => 'kd_rek']],
            [['HPP_Persediaan_Laborat_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Persediaan_Laborat_Rawat_Jalan' => 'kd_rek']],
            [['Persediaan_BHP_Laborat_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Laborat_Rawat_Jalan' => 'kd_rek']],
            [['Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Radiologi_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Radiologi_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Tindakan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Petugas_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Petugas_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Petugas_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Petugas_Radiologi_Ralan' => 'kd_rek']],
            [['Beban_Kso_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Kso_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Kso_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Kso_Radiologi_Ralan' => 'kd_rek']],
            [['HPP_Persediaan_Radiologi_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Persediaan_Radiologi_Rawat_Jalan' => 'kd_rek']],
            [['Persediaan_BHP_Radiologi_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Radiologi_Rawat_Jalan' => 'kd_rek']],
            [['Obat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Obat_Ralan' => 'kd_rek']],
            [['HPP_Obat_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Obat_Rawat_Jalan' => 'kd_rek']],
            [['Persediaan_Obat_Rawat_Jalan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Obat_Rawat_Jalan' => 'kd_rek']],
            [['Registrasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Registrasi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Tindakan_Ralan' => 'kd_rek']],
            [['Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Operasi_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Operasi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Operasi_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Paramedis_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Paramedis_Operasi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Paramedis_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Paramedis_Operasi_Ralan' => 'kd_rek']],
            [['HPP_Obat_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Obat_Operasi_Ralan' => 'kd_rek']],
            [['Persediaan_Obat_Kamar_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Obat_Kamar_Operasi_Ralan' => 'kd_rek']],
            [['Tambahan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Tambahan_Ralan' => 'kd_rek']],
            [['Potongan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Potongan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Tindakan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Paramedis_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Tindakan_Ralan' => 'kd_rek']],
            [['HPP_BHP_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_BHP_Tindakan_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Tindakan_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Tindakan_Ralan' => 'kd_rek']],
            [['Persediaan_BHP_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Tindakan_Ralan' => 'kd_rek']],
            [['Suspen_Piutang_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Tindakan_Ralan' => 'kd_rek']],
            [['Suspen_Piutang_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Laborat_Ralan' => 'kd_rek']],
            [['Suspen_Piutang_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Radiologi_Ralan' => 'kd_rek']],
            [['Suspen_Piutang_Obat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Obat_Ralan' => 'kd_rek']],
            [['Suspen_Piutang_Operasi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Operasi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Medik_Paramedis_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Laborat_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Laborat_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Perujuk_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Perujuk_Laborat_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Perujuk_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Perujuk_Laborat_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Laborat_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Laborat_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Radiologi_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Perujuk_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Perujuk_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Perujuk_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Perujuk_Radiologi_Ralan' => 'kd_rek']],
            [['Beban_KSO_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_KSO_Tindakan_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Radiologi_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Radiologi_Ralan' => 'kd_rek']],
            [['Utang_KSO_Tindakan_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_KSO_Tindakan_Ralan' => 'kd_rek']],
            [['Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Laborat_Ralan' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Laborat_Ralan'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Laborat_Ralan' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Suspen_Piutang_Tindakan_Ralan' => 'Suspen Piutang Tindakan Ralan',
            'Tindakan_Ralan' => 'Tindakan Ralan',
            'Beban_Jasa_Medik_Dokter_Tindakan_Ralan' => 'Beban Jasa Medik Dokter Tindakan Ralan',
            'Utang_Jasa_Medik_Dokter_Tindakan_Ralan' => 'Utang Jasa Medik Dokter Tindakan Ralan',
            'Beban_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'Beban Jasa Medik Paramedis Tindakan Ralan',
            'Utang_Jasa_Medik_Paramedis_Tindakan_Ralan' => 'Utang Jasa Medik Paramedis Tindakan Ralan',
            'Beban_KSO_Tindakan_Ralan' => 'Beban Kso Tindakan Ralan',
            'Utang_KSO_Tindakan_Ralan' => 'Utang Kso Tindakan Ralan',
            'Beban_Jasa_Sarana_Tindakan_Ralan' => 'Beban Jasa Sarana Tindakan Ralan',
            'Utang_Jasa_Sarana_Tindakan_Ralan' => 'Utang Jasa Sarana Tindakan Ralan',
            'HPP_BHP_Tindakan_Ralan' => 'Hpp Bhp Tindakan Ralan',
            'Persediaan_BHP_Tindakan_Ralan' => 'Persediaan Bhp Tindakan Ralan',
            'Beban_Jasa_Menejemen_Tindakan_Ralan' => 'Beban Jasa Menejemen Tindakan Ralan',
            'Utang_Jasa_Menejemen_Tindakan_Ralan' => 'Utang Jasa Menejemen Tindakan Ralan',
            'Suspen_Piutang_Laborat_Ralan' => 'Suspen Piutang Laborat Ralan',
            'Laborat_Ralan' => 'Laborat Ralan',
            'Beban_Jasa_Medik_Dokter_Laborat_Ralan' => 'Beban Jasa Medik Dokter Laborat Ralan',
            'Utang_Jasa_Medik_Dokter_Laborat_Ralan' => 'Utang Jasa Medik Dokter Laborat Ralan',
            'Beban_Jasa_Medik_Petugas_Laborat_Ralan' => 'Beban Jasa Medik Petugas Laborat Ralan',
            'Utang_Jasa_Medik_Petugas_Laborat_Ralan' => 'Utang Jasa Medik Petugas Laborat Ralan',
            'Beban_Kso_Laborat_Ralan' => 'Beban Kso Laborat Ralan',
            'Utang_Kso_Laborat_Ralan' => 'Utang Kso Laborat Ralan',
            'HPP_Persediaan_Laborat_Rawat_Jalan' => 'Hpp Persediaan Laborat Rawat Jalan',
            'Persediaan_BHP_Laborat_Rawat_Jalan' => 'Persediaan Bhp Laborat Rawat Jalan',
            'Beban_Jasa_Sarana_Laborat_Ralan' => 'Beban Jasa Sarana Laborat Ralan',
            'Utang_Jasa_Sarana_Laborat_Ralan' => 'Utang Jasa Sarana Laborat Ralan',
            'Beban_Jasa_Perujuk_Laborat_Ralan' => 'Beban Jasa Perujuk Laborat Ralan',
            'Utang_Jasa_Perujuk_Laborat_Ralan' => 'Utang Jasa Perujuk Laborat Ralan',
            'Beban_Jasa_Menejemen_Laborat_Ralan' => 'Beban Jasa Menejemen Laborat Ralan',
            'Utang_Jasa_Menejemen_Laborat_Ralan' => 'Utang Jasa Menejemen Laborat Ralan',
            'Suspen_Piutang_Radiologi_Ralan' => 'Suspen Piutang Radiologi Ralan',
            'Radiologi_Ralan' => 'Radiologi Ralan',
            'Beban_Jasa_Medik_Dokter_Radiologi_Ralan' => 'Beban Jasa Medik Dokter Radiologi Ralan',
            'Utang_Jasa_Medik_Dokter_Radiologi_Ralan' => 'Utang Jasa Medik Dokter Radiologi Ralan',
            'Beban_Jasa_Medik_Petugas_Radiologi_Ralan' => 'Beban Jasa Medik Petugas Radiologi Ralan',
            'Utang_Jasa_Medik_Petugas_Radiologi_Ralan' => 'Utang Jasa Medik Petugas Radiologi Ralan',
            'Beban_Kso_Radiologi_Ralan' => 'Beban Kso Radiologi Ralan',
            'Utang_Kso_Radiologi_Ralan' => 'Utang Kso Radiologi Ralan',
            'HPP_Persediaan_Radiologi_Rawat_Jalan' => 'Hpp Persediaan Radiologi Rawat Jalan',
            'Persediaan_BHP_Radiologi_Rawat_Jalan' => 'Persediaan Bhp Radiologi Rawat Jalan',
            'Beban_Jasa_Sarana_Radiologi_Ralan' => 'Beban Jasa Sarana Radiologi Ralan',
            'Utang_Jasa_Sarana_Radiologi_Ralan' => 'Utang Jasa Sarana Radiologi Ralan',
            'Beban_Jasa_Perujuk_Radiologi_Ralan' => 'Beban Jasa Perujuk Radiologi Ralan',
            'Utang_Jasa_Perujuk_Radiologi_Ralan' => 'Utang Jasa Perujuk Radiologi Ralan',
            'Beban_Jasa_Menejemen_Radiologi_Ralan' => 'Beban Jasa Menejemen Radiologi Ralan',
            'Utang_Jasa_Menejemen_Radiologi_Ralan' => 'Utang Jasa Menejemen Radiologi Ralan',
            'Suspen_Piutang_Obat_Ralan' => 'Suspen Piutang Obat Ralan',
            'Obat_Ralan' => 'Obat Ralan',
            'HPP_Obat_Rawat_Jalan' => 'Hpp Obat Rawat Jalan',
            'Persediaan_Obat_Rawat_Jalan' => 'Persediaan Obat Rawat Jalan',
            'Registrasi_Ralan' => 'Registrasi Ralan',
            'Suspen_Piutang_Operasi_Ralan' => 'Suspen Piutang Operasi Ralan',
            'Operasi_Ralan' => 'Operasi Ralan',
            'Beban_Jasa_Medik_Dokter_Operasi_Ralan' => 'Beban Jasa Medik Dokter Operasi Ralan',
            'Utang_Jasa_Medik_Dokter_Operasi_Ralan' => 'Utang Jasa Medik Dokter Operasi Ralan',
            'Beban_Jasa_Medik_Paramedis_Operasi_Ralan' => 'Beban Jasa Medik Paramedis Operasi Ralan',
            'Utang_Jasa_Medik_Paramedis_Operasi_Ralan' => 'Utang Jasa Medik Paramedis Operasi Ralan',
            'HPP_Obat_Operasi_Ralan' => 'Hpp Obat Operasi Ralan',
            'Persediaan_Obat_Kamar_Operasi_Ralan' => 'Persediaan Obat Kamar Operasi Ralan',
            'Tambahan_Ralan' => 'Tambahan Ralan',
            'Potongan_Ralan' => 'Potongan Ralan',
        ];
    }

    /**
     * Gets query for [[BebanJasaMedikDokterLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Operasi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikParamedisOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikParamedisOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Paramedis_Operasi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikParamedisTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikParamedisTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Paramedis_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikPetugasLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikPetugasLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Petugas_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMedikPetugasRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikPetugasRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Petugas_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaPerujukLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaPerujukLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Perujuk_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaPerujukRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaPerujukRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Perujuk_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaSaranaLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaSaranaRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[BebanJasaSaranaTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[BebanKSOTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKSOTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_KSO_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[BebanKsoLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKsoLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Kso_Laborat_Ralan']);
    }

    /**
     * Gets query for [[BebanKsoRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKsoRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Kso_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[HPPBHPTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPBHPTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_BHP_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[HPPObatOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPObatOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Obat_Operasi_Ralan']);
    }

    /**
     * Gets query for [[HPPObatRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPObatRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Obat_Rawat_Jalan']);
    }

    /**
     * Gets query for [[HPPPersediaanLaboratRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPPersediaanLaboratRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Persediaan_Laborat_Rawat_Jalan']);
    }

    /**
     * Gets query for [[HPPPersediaanRadiologiRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPPersediaanRadiologiRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Persediaan_Radiologi_Rawat_Jalan']);
    }

    /**
     * Gets query for [[LaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Laborat_Ralan']);
    }

    /**
     * Gets query for [[ObatRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Obat_Ralan']);
    }

    /**
     * Gets query for [[OperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Operasi_Ralan']);
    }

    /**
     * Gets query for [[PersediaanBHPLaboratRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPLaboratRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Laborat_Rawat_Jalan']);
    }

    /**
     * Gets query for [[PersediaanBHPRadiologiRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPRadiologiRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Radiologi_Rawat_Jalan']);
    }

    /**
     * Gets query for [[PersediaanBHPTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[PersediaanObatKamarOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanObatKamarOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Obat_Kamar_Operasi_Ralan']);
    }

    /**
     * Gets query for [[PersediaanObatRawatJalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanObatRawatJalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Obat_Rawat_Jalan']);
    }

    /**
     * Gets query for [[PotonganRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPotonganRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Potongan_Ralan']);
    }

    /**
     * Gets query for [[RadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Radiologi_Ralan']);
    }

    /**
     * Gets query for [[RegistrasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Registrasi_Ralan']);
    }

    /**
     * Gets query for [[SuspenPiutangLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Laborat_Ralan']);
    }

    /**
     * Gets query for [[SuspenPiutangObatRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangObatRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Obat_Ralan']);
    }

    /**
     * Gets query for [[SuspenPiutangOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Operasi_Ralan']);
    }

    /**
     * Gets query for [[SuspenPiutangRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[SuspenPiutangTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[TambahanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTambahanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Tambahan_Ralan']);
    }

    /**
     * Gets query for [[TindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Operasi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikParamedisOperasiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikParamedisOperasiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Paramedis_Operasi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikParamedisTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikParamedisTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Paramedis_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikPetugasLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikPetugasLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Petugas_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMedikPetugasRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikPetugasRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Petugas_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaPerujukLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaPerujukLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Perujuk_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaPerujukRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaPerujukRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Perujuk_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaSaranaLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaSaranaRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Radiologi_Ralan']);
    }

    /**
     * Gets query for [[UtangJasaSaranaTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangKSOTindakanRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKSOTindakanRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_KSO_Tindakan_Ralan']);
    }

    /**
     * Gets query for [[UtangKsoLaboratRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKsoLaboratRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Kso_Laborat_Ralan']);
    }

    /**
     * Gets query for [[UtangKsoRadiologiRalan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKsoRadiologiRalan()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Kso_Radiologi_Ralan']);
    }
}
