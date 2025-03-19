<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "set_akun_ranap".
 *
 * @property string $Suspen_Piutang_Tindakan_Ranap
 * @property string|null $Tindakan_Ranap
 * @property string $Beban_Jasa_Medik_Dokter_Tindakan_Ranap
 * @property string $Utang_Jasa_Medik_Dokter_Tindakan_Ranap
 * @property string $Beban_Jasa_Medik_Paramedis_Tindakan_Ranap
 * @property string $Utang_Jasa_Medik_Paramedis_Tindakan_Ranap
 * @property string $Beban_KSO_Tindakan_Ranap
 * @property string $Utang_KSO_Tindakan_Ranap
 * @property string $Beban_Jasa_Sarana_Tindakan_Ranap
 * @property string $Utang_Jasa_Sarana_Tindakan_Ranap
 * @property string $Beban_Jasa_Menejemen_Tindakan_Ranap
 * @property string $Utang_Jasa_Menejemen_Tindakan_Ranap
 * @property string $HPP_BHP_Tindakan_Ranap
 * @property string $Persediaan_BHP_Tindakan_Ranap
 * @property string $Suspen_Piutang_Laborat_Ranap
 * @property string|null $Laborat_Ranap
 * @property string $Beban_Jasa_Medik_Dokter_Laborat_Ranap
 * @property string $Utang_Jasa_Medik_Dokter_Laborat_Ranap
 * @property string $Beban_Jasa_Medik_Petugas_Laborat_Ranap
 * @property string $Utang_Jasa_Medik_Petugas_Laborat_Ranap
 * @property string $Beban_Kso_Laborat_Ranap
 * @property string $Utang_Kso_Laborat_Ranap
 * @property string $HPP_Persediaan_Laborat_Rawat_inap
 * @property string $Persediaan_BHP_Laborat_Rawat_Inap
 * @property string $Beban_Jasa_Sarana_Laborat_Ranap
 * @property string $Utang_Jasa_Sarana_Laborat_Ranap
 * @property string $Beban_Jasa_Perujuk_Laborat_Ranap
 * @property string $Utang_Jasa_Perujuk_Laborat_Ranap
 * @property string $Beban_Jasa_Menejemen_Laborat_Ranap
 * @property string $Utang_Jasa_Menejemen_Laborat_Ranap
 * @property string $Suspen_Piutang_Radiologi_Ranap
 * @property string|null $Radiologi_Ranap
 * @property string $Beban_Jasa_Medik_Dokter_Radiologi_Ranap
 * @property string $Utang_Jasa_Medik_Dokter_Radiologi_Ranap
 * @property string $Beban_Jasa_Medik_Petugas_Radiologi_Ranap
 * @property string $Utang_Jasa_Medik_Petugas_Radiologi_Ranap
 * @property string $Beban_Kso_Radiologi_Ranap
 * @property string $Utang_Kso_Radiologi_Ranap
 * @property string $HPP_Persediaan_Radiologi_Rawat_Inap
 * @property string $Persediaan_BHP_Radiologi_Rawat_Inap
 * @property string $Beban_Jasa_Sarana_Radiologi_Ranap
 * @property string $Utang_Jasa_Sarana_Radiologi_Ranap
 * @property string $Beban_Jasa_Perujuk_Radiologi_Ranap
 * @property string $Utang_Jasa_Perujuk_Radiologi_Ranap
 * @property string $Beban_Jasa_Menejemen_Radiologi_Ranap
 * @property string $Utang_Jasa_Menejemen_Radiologi_Ranap
 * @property string $Suspen_Piutang_Obat_Ranap
 * @property string|null $Obat_Ranap
 * @property string $HPP_Obat_Rawat_Inap
 * @property string $Persediaan_Obat_Rawat_Inap
 * @property string|null $Registrasi_Ranap
 * @property string|null $Service_Ranap
 * @property string|null $Tambahan_Ranap
 * @property string|null $Potongan_Ranap
 * @property string|null $Retur_Obat_Ranap
 * @property string|null $Resep_Pulang_Ranap
 * @property string|null $Kamar_Inap
 * @property string $Suspen_Piutang_Operasi_Ranap
 * @property string|null $Operasi_Ranap
 * @property string $Beban_Jasa_Medik_Dokter_Operasi_Ranap
 * @property string $Utang_Jasa_Medik_Dokter_Operasi_Ranap
 * @property string $Beban_Jasa_Medik_Paramedis_Operasi_Ranap
 * @property string $Utang_Jasa_Medik_Paramedis_Operasi_Ranap
 * @property string $HPP_Obat_Operasi_Ranap
 *
 * @property Rekening $bebanJasaMedikDokterLaboratRanap
 * @property Rekening $bebanJasaMedikDokterOperasiRanap
 * @property Rekening $bebanJasaMedikDokterRadiologiRanap
 * @property Rekening $bebanJasaMedikDokterTindakanRanap
 * @property Rekening $bebanJasaMedikParamedisOperasiRanap
 * @property Rekening $bebanJasaMedikParamedisTindakanRanap
 * @property Rekening $bebanJasaMedikPetugasLaboratRanap
 * @property Rekening $bebanJasaMedikPetugasRadiologiRanap
 * @property Rekening $bebanJasaMenejemenLaboratRanap
 * @property Rekening $bebanJasaMenejemenRadiologiRanap
 * @property Rekening $bebanJasaMenejemenTindakanRanap
 * @property Rekening $bebanJasaPerujukLaboratRanap
 * @property Rekening $bebanJasaPerujukRadiologiRanap
 * @property Rekening $bebanJasaSaranaLaboratRanap
 * @property Rekening $bebanJasaSaranaRadiologiRanap
 * @property Rekening $bebanJasaSaranaTindakanRanap
 * @property Rekening $bebanKSOTindakanRanap
 * @property Rekening $bebanKsoLaboratRanap
 * @property Rekening $bebanKsoRadiologiRanap
 * @property Rekening $hPPBHPTindakanRanap
 * @property Rekening $hPPObatOperasiRanap
 * @property Rekening $hPPObatRawatInap
 * @property Rekening $hPPPersediaanLaboratRawatInap
 * @property Rekening $hPPPersediaanRadiologiRawatInap
 * @property Rekening $kamarInap
 * @property Rekening $laboratRanap
 * @property Rekening $obatRanap
 * @property Rekening $operasiRanap
 * @property Rekening $persediaanBHPLaboratRawatInap
 * @property Rekening $persediaanBHPRadiologiRawatInap
 * @property Rekening $persediaanBHPTindakanRanap
 * @property Rekening $persediaanObatRawatInap
 * @property Rekening $potonganRanap
 * @property Rekening $radiologiRanap
 * @property Rekening $registrasiRanap
 * @property Rekening $resepPulangRanap
 * @property Rekening $returObatRanap
 * @property Rekening $serviceRanap
 * @property Rekening $suspenPiutangLaboratRanap
 * @property Rekening $suspenPiutangObatRanap
 * @property Rekening $suspenPiutangOperasiRanap
 * @property Rekening $suspenPiutangRadiologiRanap
 * @property Rekening $suspenPiutangTindakanRanap
 * @property Rekening $tambahanRanap
 * @property Rekening $tindakanRanap
 * @property Rekening $utangJasaMedikDokterLaboratRanap
 * @property Rekening $utangJasaMedikDokterOperasiRanap
 * @property Rekening $utangJasaMedikDokterRadiologiRanap
 * @property Rekening $utangJasaMedikDokterTindakanRanap
 * @property Rekening $utangJasaMedikParamedisOperasiRanap
 * @property Rekening $utangJasaMedikParamedisTindakanRanap
 * @property Rekening $utangJasaMedikPetugasLaboratRanap
 * @property Rekening $utangJasaMedikPetugasRadiologiRanap
 * @property Rekening $utangJasaMenejemenLaboratRanap
 * @property Rekening $utangJasaMenejemenRadiologiRanap
 * @property Rekening $utangJasaMenejemenTindakanRanap
 * @property Rekening $utangJasaPerujukLaboratRanap
 * @property Rekening $utangJasaPerujukRadiologiRanap
 * @property Rekening $utangJasaSaranaLaboratRanap
 * @property Rekening $utangJasaSaranaRadiologiRanap
 * @property Rekening $utangJasaSaranaTindakanRanap
 * @property Rekening $utangKSOTindakanRanap
 * @property Rekening $utangKsoLaboratRanap
 * @property Rekening $utangKsoRadiologiRanap
 */
class SetAkunRanap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'set_akun_ranap';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Suspen_Piutang_Tindakan_Ranap', 'Beban_Jasa_Medik_Dokter_Tindakan_Ranap', 'Utang_Jasa_Medik_Dokter_Tindakan_Ranap', 'Beban_Jasa_Medik_Paramedis_Tindakan_Ranap', 'Utang_Jasa_Medik_Paramedis_Tindakan_Ranap', 'Beban_KSO_Tindakan_Ranap', 'Utang_KSO_Tindakan_Ranap', 'Beban_Jasa_Sarana_Tindakan_Ranap', 'Utang_Jasa_Sarana_Tindakan_Ranap', 'Beban_Jasa_Menejemen_Tindakan_Ranap', 'Utang_Jasa_Menejemen_Tindakan_Ranap', 'HPP_BHP_Tindakan_Ranap', 'Persediaan_BHP_Tindakan_Ranap', 'Suspen_Piutang_Laborat_Ranap', 'Beban_Jasa_Medik_Dokter_Laborat_Ranap', 'Utang_Jasa_Medik_Dokter_Laborat_Ranap', 'Beban_Jasa_Medik_Petugas_Laborat_Ranap', 'Utang_Jasa_Medik_Petugas_Laborat_Ranap', 'Beban_Kso_Laborat_Ranap', 'Utang_Kso_Laborat_Ranap', 'HPP_Persediaan_Laborat_Rawat_inap', 'Persediaan_BHP_Laborat_Rawat_Inap', 'Beban_Jasa_Sarana_Laborat_Ranap', 'Utang_Jasa_Sarana_Laborat_Ranap', 'Beban_Jasa_Perujuk_Laborat_Ranap', 'Utang_Jasa_Perujuk_Laborat_Ranap', 'Beban_Jasa_Menejemen_Laborat_Ranap', 'Utang_Jasa_Menejemen_Laborat_Ranap', 'Suspen_Piutang_Radiologi_Ranap', 'Beban_Jasa_Medik_Dokter_Radiologi_Ranap', 'Utang_Jasa_Medik_Dokter_Radiologi_Ranap', 'Beban_Jasa_Medik_Petugas_Radiologi_Ranap', 'Utang_Jasa_Medik_Petugas_Radiologi_Ranap', 'Beban_Kso_Radiologi_Ranap', 'Utang_Kso_Radiologi_Ranap', 'HPP_Persediaan_Radiologi_Rawat_Inap', 'Persediaan_BHP_Radiologi_Rawat_Inap', 'Beban_Jasa_Sarana_Radiologi_Ranap', 'Utang_Jasa_Sarana_Radiologi_Ranap', 'Beban_Jasa_Perujuk_Radiologi_Ranap', 'Utang_Jasa_Perujuk_Radiologi_Ranap', 'Beban_Jasa_Menejemen_Radiologi_Ranap', 'Utang_Jasa_Menejemen_Radiologi_Ranap', 'Suspen_Piutang_Obat_Ranap', 'HPP_Obat_Rawat_Inap', 'Persediaan_Obat_Rawat_Inap', 'Suspen_Piutang_Operasi_Ranap', 'Beban_Jasa_Medik_Dokter_Operasi_Ranap', 'Utang_Jasa_Medik_Dokter_Operasi_Ranap', 'Beban_Jasa_Medik_Paramedis_Operasi_Ranap', 'Utang_Jasa_Medik_Paramedis_Operasi_Ranap', 'HPP_Obat_Operasi_Ranap'], 'required'],
            [['Suspen_Piutang_Tindakan_Ranap', 'Tindakan_Ranap', 'Beban_Jasa_Medik_Dokter_Tindakan_Ranap', 'Utang_Jasa_Medik_Dokter_Tindakan_Ranap', 'Beban_Jasa_Medik_Paramedis_Tindakan_Ranap', 'Utang_Jasa_Medik_Paramedis_Tindakan_Ranap', 'Beban_KSO_Tindakan_Ranap', 'Utang_KSO_Tindakan_Ranap', 'Beban_Jasa_Sarana_Tindakan_Ranap', 'Utang_Jasa_Sarana_Tindakan_Ranap', 'Beban_Jasa_Menejemen_Tindakan_Ranap', 'Utang_Jasa_Menejemen_Tindakan_Ranap', 'HPP_BHP_Tindakan_Ranap', 'Persediaan_BHP_Tindakan_Ranap', 'Suspen_Piutang_Laborat_Ranap', 'Laborat_Ranap', 'Beban_Jasa_Medik_Dokter_Laborat_Ranap', 'Utang_Jasa_Medik_Dokter_Laborat_Ranap', 'Beban_Jasa_Medik_Petugas_Laborat_Ranap', 'Utang_Jasa_Medik_Petugas_Laborat_Ranap', 'Beban_Kso_Laborat_Ranap', 'Utang_Kso_Laborat_Ranap', 'HPP_Persediaan_Laborat_Rawat_inap', 'Persediaan_BHP_Laborat_Rawat_Inap', 'Beban_Jasa_Sarana_Laborat_Ranap', 'Utang_Jasa_Sarana_Laborat_Ranap', 'Beban_Jasa_Perujuk_Laborat_Ranap', 'Utang_Jasa_Perujuk_Laborat_Ranap', 'Beban_Jasa_Menejemen_Laborat_Ranap', 'Utang_Jasa_Menejemen_Laborat_Ranap', 'Suspen_Piutang_Radiologi_Ranap', 'Radiologi_Ranap', 'Beban_Jasa_Medik_Dokter_Radiologi_Ranap', 'Utang_Jasa_Medik_Dokter_Radiologi_Ranap', 'Beban_Jasa_Medik_Petugas_Radiologi_Ranap', 'Utang_Jasa_Medik_Petugas_Radiologi_Ranap', 'Beban_Kso_Radiologi_Ranap', 'Utang_Kso_Radiologi_Ranap', 'HPP_Persediaan_Radiologi_Rawat_Inap', 'Persediaan_BHP_Radiologi_Rawat_Inap', 'Beban_Jasa_Sarana_Radiologi_Ranap', 'Utang_Jasa_Sarana_Radiologi_Ranap', 'Beban_Jasa_Perujuk_Radiologi_Ranap', 'Utang_Jasa_Perujuk_Radiologi_Ranap', 'Beban_Jasa_Menejemen_Radiologi_Ranap', 'Utang_Jasa_Menejemen_Radiologi_Ranap', 'Suspen_Piutang_Obat_Ranap', 'Obat_Ranap', 'HPP_Obat_Rawat_Inap', 'Persediaan_Obat_Rawat_Inap', 'Registrasi_Ranap', 'Service_Ranap', 'Tambahan_Ranap', 'Potongan_Ranap', 'Retur_Obat_Ranap', 'Resep_Pulang_Ranap', 'Kamar_Inap', 'Suspen_Piutang_Operasi_Ranap', 'Operasi_Ranap', 'Beban_Jasa_Medik_Dokter_Operasi_Ranap', 'Utang_Jasa_Medik_Dokter_Operasi_Ranap', 'Beban_Jasa_Medik_Paramedis_Operasi_Ranap', 'Utang_Jasa_Medik_Paramedis_Operasi_Ranap', 'HPP_Obat_Operasi_Ranap'], 'string', 'max' => 15],
            [['Suspen_Piutang_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Tindakan_Ranap' => 'kd_rek']],
            [['Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Laborat_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Laborat_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Petugas_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Petugas_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Petugas_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Petugas_Laborat_Ranap' => 'kd_rek']],
            [['Beban_Kso_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Kso_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Kso_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Kso_Laborat_Ranap' => 'kd_rek']],
            [['HPP_Persediaan_Laborat_Rawat_inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Persediaan_Laborat_Rawat_inap' => 'kd_rek']],
            [['Persediaan_BHP_Laborat_Rawat_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Laborat_Rawat_Inap' => 'kd_rek']],
            [['Suspen_Piutang_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Radiologi_Ranap' => 'kd_rek']],
            [['Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Tindakan_Ranap' => 'kd_rek']],
            [['Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Radiologi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Radiologi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Petugas_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Petugas_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Petugas_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Petugas_Radiologi_Ranap' => 'kd_rek']],
            [['Beban_Kso_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Kso_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Kso_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Kso_Radiologi_Ranap' => 'kd_rek']],
            [['HPP_Persediaan_Radiologi_Rawat_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Persediaan_Radiologi_Rawat_Inap' => 'kd_rek']],
            [['Persediaan_BHP_Radiologi_Rawat_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Radiologi_Rawat_Inap' => 'kd_rek']],
            [['Obat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Obat_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Tindakan_Ranap' => 'kd_rek']],
            [['Registrasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Registrasi_Ranap' => 'kd_rek']],
            [['Service_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Service_Ranap' => 'kd_rek']],
            [['Tambahan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Tambahan_Ranap' => 'kd_rek']],
            [['Potongan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Potongan_Ranap' => 'kd_rek']],
            [['Retur_Obat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Retur_Obat_Ranap' => 'kd_rek']],
            [['Resep_Pulang_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Resep_Pulang_Ranap' => 'kd_rek']],
            [['Kamar_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Kamar_Inap' => 'kd_rek']],
            [['Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Operasi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Tindakan_Ranap' => 'kd_rek']],
            [['Suspen_Piutang_Obat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Obat_Ranap' => 'kd_rek']],
            [['HPP_Obat_Rawat_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Obat_Rawat_Inap' => 'kd_rek']],
            [['Persediaan_Obat_Rawat_Inap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_Obat_Rawat_Inap' => 'kd_rek']],
            [['Suspen_Piutang_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Operasi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Dokter_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Dokter_Operasi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Dokter_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Dokter_Operasi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Paramedis_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Paramedis_Operasi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Paramedis_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Paramedis_Operasi_Ranap' => 'kd_rek']],
            [['HPP_Obat_Operasi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_Obat_Operasi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Medik_Paramedis_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Tindakan_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Tindakan_Ranap' => 'kd_rek']],
            [['HPP_BHP_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['HPP_BHP_Tindakan_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Tindakan_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Tindakan_Ranap' => 'kd_rek']],
            [['Persediaan_BHP_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Persediaan_BHP_Tindakan_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Laborat_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Perujuk_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Perujuk_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Perujuk_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Perujuk_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Medik_Paramedis_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Laborat_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Laborat_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Sarana_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Sarana_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Sarana_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Sarana_Radiologi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Perujuk_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Perujuk_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Perujuk_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Perujuk_Radiologi_Ranap' => 'kd_rek']],
            [['Beban_Jasa_Menejemen_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_Jasa_Menejemen_Radiologi_Ranap' => 'kd_rek']],
            [['Utang_Jasa_Menejemen_Radiologi_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_Jasa_Menejemen_Radiologi_Ranap' => 'kd_rek']],
            [['Beban_KSO_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Beban_KSO_Tindakan_Ranap' => 'kd_rek']],
            [['Utang_KSO_Tindakan_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Utang_KSO_Tindakan_Ranap' => 'kd_rek']],
            [['Suspen_Piutang_Laborat_Ranap'], 'exist', 'skipOnError' => true, 'targetClass' => Rekening::class, 'targetAttribute' => ['Suspen_Piutang_Laborat_Ranap' => 'kd_rek']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Suspen_Piutang_Tindakan_Ranap' => 'Suspen Piutang Tindakan Ranap',
            'Tindakan_Ranap' => 'Tindakan Ranap',
            'Beban_Jasa_Medik_Dokter_Tindakan_Ranap' => 'Beban Jasa Medik Dokter Tindakan Ranap',
            'Utang_Jasa_Medik_Dokter_Tindakan_Ranap' => 'Utang Jasa Medik Dokter Tindakan Ranap',
            'Beban_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'Beban Jasa Medik Paramedis Tindakan Ranap',
            'Utang_Jasa_Medik_Paramedis_Tindakan_Ranap' => 'Utang Jasa Medik Paramedis Tindakan Ranap',
            'Beban_KSO_Tindakan_Ranap' => 'Beban Kso Tindakan Ranap',
            'Utang_KSO_Tindakan_Ranap' => 'Utang Kso Tindakan Ranap',
            'Beban_Jasa_Sarana_Tindakan_Ranap' => 'Beban Jasa Sarana Tindakan Ranap',
            'Utang_Jasa_Sarana_Tindakan_Ranap' => 'Utang Jasa Sarana Tindakan Ranap',
            'Beban_Jasa_Menejemen_Tindakan_Ranap' => 'Beban Jasa Menejemen Tindakan Ranap',
            'Utang_Jasa_Menejemen_Tindakan_Ranap' => 'Utang Jasa Menejemen Tindakan Ranap',
            'HPP_BHP_Tindakan_Ranap' => 'Hpp Bhp Tindakan Ranap',
            'Persediaan_BHP_Tindakan_Ranap' => 'Persediaan Bhp Tindakan Ranap',
            'Suspen_Piutang_Laborat_Ranap' => 'Suspen Piutang Laborat Ranap',
            'Laborat_Ranap' => 'Laborat Ranap',
            'Beban_Jasa_Medik_Dokter_Laborat_Ranap' => 'Beban Jasa Medik Dokter Laborat Ranap',
            'Utang_Jasa_Medik_Dokter_Laborat_Ranap' => 'Utang Jasa Medik Dokter Laborat Ranap',
            'Beban_Jasa_Medik_Petugas_Laborat_Ranap' => 'Beban Jasa Medik Petugas Laborat Ranap',
            'Utang_Jasa_Medik_Petugas_Laborat_Ranap' => 'Utang Jasa Medik Petugas Laborat Ranap',
            'Beban_Kso_Laborat_Ranap' => 'Beban Kso Laborat Ranap',
            'Utang_Kso_Laborat_Ranap' => 'Utang Kso Laborat Ranap',
            'HPP_Persediaan_Laborat_Rawat_inap' => 'Hpp Persediaan Laborat Rawat Inap',
            'Persediaan_BHP_Laborat_Rawat_Inap' => 'Persediaan Bhp Laborat Rawat Inap',
            'Beban_Jasa_Sarana_Laborat_Ranap' => 'Beban Jasa Sarana Laborat Ranap',
            'Utang_Jasa_Sarana_Laborat_Ranap' => 'Utang Jasa Sarana Laborat Ranap',
            'Beban_Jasa_Perujuk_Laborat_Ranap' => 'Beban Jasa Perujuk Laborat Ranap',
            'Utang_Jasa_Perujuk_Laborat_Ranap' => 'Utang Jasa Perujuk Laborat Ranap',
            'Beban_Jasa_Menejemen_Laborat_Ranap' => 'Beban Jasa Menejemen Laborat Ranap',
            'Utang_Jasa_Menejemen_Laborat_Ranap' => 'Utang Jasa Menejemen Laborat Ranap',
            'Suspen_Piutang_Radiologi_Ranap' => 'Suspen Piutang Radiologi Ranap',
            'Radiologi_Ranap' => 'Radiologi Ranap',
            'Beban_Jasa_Medik_Dokter_Radiologi_Ranap' => 'Beban Jasa Medik Dokter Radiologi Ranap',
            'Utang_Jasa_Medik_Dokter_Radiologi_Ranap' => 'Utang Jasa Medik Dokter Radiologi Ranap',
            'Beban_Jasa_Medik_Petugas_Radiologi_Ranap' => 'Beban Jasa Medik Petugas Radiologi Ranap',
            'Utang_Jasa_Medik_Petugas_Radiologi_Ranap' => 'Utang Jasa Medik Petugas Radiologi Ranap',
            'Beban_Kso_Radiologi_Ranap' => 'Beban Kso Radiologi Ranap',
            'Utang_Kso_Radiologi_Ranap' => 'Utang Kso Radiologi Ranap',
            'HPP_Persediaan_Radiologi_Rawat_Inap' => 'Hpp Persediaan Radiologi Rawat Inap',
            'Persediaan_BHP_Radiologi_Rawat_Inap' => 'Persediaan Bhp Radiologi Rawat Inap',
            'Beban_Jasa_Sarana_Radiologi_Ranap' => 'Beban Jasa Sarana Radiologi Ranap',
            'Utang_Jasa_Sarana_Radiologi_Ranap' => 'Utang Jasa Sarana Radiologi Ranap',
            'Beban_Jasa_Perujuk_Radiologi_Ranap' => 'Beban Jasa Perujuk Radiologi Ranap',
            'Utang_Jasa_Perujuk_Radiologi_Ranap' => 'Utang Jasa Perujuk Radiologi Ranap',
            'Beban_Jasa_Menejemen_Radiologi_Ranap' => 'Beban Jasa Menejemen Radiologi Ranap',
            'Utang_Jasa_Menejemen_Radiologi_Ranap' => 'Utang Jasa Menejemen Radiologi Ranap',
            'Suspen_Piutang_Obat_Ranap' => 'Suspen Piutang Obat Ranap',
            'Obat_Ranap' => 'Obat Ranap',
            'HPP_Obat_Rawat_Inap' => 'Hpp Obat Rawat Inap',
            'Persediaan_Obat_Rawat_Inap' => 'Persediaan Obat Rawat Inap',
            'Registrasi_Ranap' => 'Registrasi Ranap',
            'Service_Ranap' => 'Service Ranap',
            'Tambahan_Ranap' => 'Tambahan Ranap',
            'Potongan_Ranap' => 'Potongan Ranap',
            'Retur_Obat_Ranap' => 'Retur Obat Ranap',
            'Resep_Pulang_Ranap' => 'Resep Pulang Ranap',
            'Kamar_Inap' => 'Kamar Inap',
            'Suspen_Piutang_Operasi_Ranap' => 'Suspen Piutang Operasi Ranap',
            'Operasi_Ranap' => 'Operasi Ranap',
            'Beban_Jasa_Medik_Dokter_Operasi_Ranap' => 'Beban Jasa Medik Dokter Operasi Ranap',
            'Utang_Jasa_Medik_Dokter_Operasi_Ranap' => 'Utang Jasa Medik Dokter Operasi Ranap',
            'Beban_Jasa_Medik_Paramedis_Operasi_Ranap' => 'Beban Jasa Medik Paramedis Operasi Ranap',
            'Utang_Jasa_Medik_Paramedis_Operasi_Ranap' => 'Utang Jasa Medik Paramedis Operasi Ranap',
            'HPP_Obat_Operasi_Ranap' => 'Hpp Obat Operasi Ranap',
        ];
    }

    /**
     * Gets query for [[BebanJasaMedikDokterLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Operasi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikDokterTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikDokterTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Dokter_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikParamedisOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikParamedisOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Paramedis_Operasi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikParamedisTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikParamedisTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Paramedis_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikPetugasLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikPetugasLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Petugas_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMedikPetugasRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMedikPetugasRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Medik_Petugas_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaMenejemenTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaMenejemenTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Menejemen_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaPerujukLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaPerujukLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Perujuk_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaPerujukRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaPerujukRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Perujuk_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaSaranaLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaSaranaRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[BebanJasaSaranaTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanJasaSaranaTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Jasa_Sarana_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[BebanKSOTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKSOTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_KSO_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[BebanKsoLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKsoLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Kso_Laborat_Ranap']);
    }

    /**
     * Gets query for [[BebanKsoRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBebanKsoRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Beban_Kso_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[HPPBHPTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPBHPTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_BHP_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[HPPObatOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPObatOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Obat_Operasi_Ranap']);
    }

    /**
     * Gets query for [[HPPObatRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPObatRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Obat_Rawat_Inap']);
    }

    /**
     * Gets query for [[HPPPersediaanLaboratRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPPersediaanLaboratRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Persediaan_Laborat_Rawat_inap']);
    }

    /**
     * Gets query for [[HPPPersediaanRadiologiRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHPPPersediaanRadiologiRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'HPP_Persediaan_Radiologi_Rawat_Inap']);
    }

    /**
     * Gets query for [[KamarInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKamarInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Kamar_Inap']);
    }

    /**
     * Gets query for [[LaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Laborat_Ranap']);
    }

    /**
     * Gets query for [[ObatRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObatRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Obat_Ranap']);
    }

    /**
     * Gets query for [[OperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Operasi_Ranap']);
    }

    /**
     * Gets query for [[PersediaanBHPLaboratRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPLaboratRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Laborat_Rawat_Inap']);
    }

    /**
     * Gets query for [[PersediaanBHPRadiologiRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPRadiologiRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Radiologi_Rawat_Inap']);
    }

    /**
     * Gets query for [[PersediaanBHPTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanBHPTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_BHP_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[PersediaanObatRawatInap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersediaanObatRawatInap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Persediaan_Obat_Rawat_Inap']);
    }

    /**
     * Gets query for [[PotonganRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPotonganRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Potongan_Ranap']);
    }

    /**
     * Gets query for [[RadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Radiologi_Ranap']);
    }

    /**
     * Gets query for [[RegistrasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Registrasi_Ranap']);
    }

    /**
     * Gets query for [[ResepPulangRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResepPulangRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Resep_Pulang_Ranap']);
    }

    /**
     * Gets query for [[ReturObatRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturObatRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Retur_Obat_Ranap']);
    }

    /**
     * Gets query for [[ServiceRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Service_Ranap']);
    }

    /**
     * Gets query for [[SuspenPiutangLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Laborat_Ranap']);
    }

    /**
     * Gets query for [[SuspenPiutangObatRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangObatRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Obat_Ranap']);
    }

    /**
     * Gets query for [[SuspenPiutangOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Operasi_Ranap']);
    }

    /**
     * Gets query for [[SuspenPiutangRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[SuspenPiutangTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuspenPiutangTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Suspen_Piutang_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[TambahanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTambahanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Tambahan_Ranap']);
    }

    /**
     * Gets query for [[TindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Operasi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikDokterTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikDokterTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Dokter_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikParamedisOperasiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikParamedisOperasiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Paramedis_Operasi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikParamedisTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikParamedisTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Paramedis_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikPetugasLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikPetugasLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Petugas_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMedikPetugasRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMedikPetugasRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Medik_Petugas_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaMenejemenTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaMenejemenTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Menejemen_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaPerujukLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaPerujukLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Perujuk_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaPerujukRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaPerujukRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Perujuk_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaSaranaLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaSaranaRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Radiologi_Ranap']);
    }

    /**
     * Gets query for [[UtangJasaSaranaTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangJasaSaranaTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Jasa_Sarana_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangKSOTindakanRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKSOTindakanRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_KSO_Tindakan_Ranap']);
    }

    /**
     * Gets query for [[UtangKsoLaboratRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKsoLaboratRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Kso_Laborat_Ranap']);
    }

    /**
     * Gets query for [[UtangKsoRadiologiRanap]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUtangKsoRadiologiRanap()
    {
        return $this->hasOne(Rekening::class, ['kd_rek' => 'Utang_Kso_Radiologi_Ranap']);
    }
}
