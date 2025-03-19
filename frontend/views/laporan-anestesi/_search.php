<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="laporan-anestesi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'mulai') ?>

    <?= $form->field($model, 'selesai') ?>

    <?= $form->field($model, 'tempat_pemantauan') ?>

    <?= $form->field($model, 'tindakan_operasi') ?>

    <?php // echo $form->field($model, 'operator1') ?>

    <?php // echo $form->field($model, 'asisten_operator') ?>

    <?php // echo $form->field($model, 'dokter_anestesi') ?>

    <?php // echo $form->field($model, 'operator2') ?>

    <?php // echo $form->field($model, 'onloop') ?>

    <?php // echo $form->field($model, 'penata_anestesi') ?>

    <?php // echo $form->field($model, 'diagnosa_preop') ?>

    <?php // echo $form->field($model, 'diagnosa_postop') ?>

    <?php // echo $form->field($model, 'status_asa') ?>

    <?php // echo $form->field($model, 'karena') ?>

    <?php // echo $form->field($model, 'premedikasi') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_td') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_rr') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_hr') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_spo2') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_ekg') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_suhu') ?>

    <?php // echo $form->field($model, 'ttv_premedikasi_lain') ?>

    <?php // echo $form->field($model, 'lama_operasi') ?>

    <?php // echo $form->field($model, 'lama_anastesi') ?>

    <?php // echo $form->field($model, 'keadaan_umum_bb') ?>

    <?php // echo $form->field($model, 'keadaan_umum_tb') ?>

    <?php // echo $form->field($model, 'keadaan_umum_alergi') ?>

    <?php // echo $form->field($model, 'keadaan_umum_malampathy') ?>

    <?php // echo $form->field($model, 'keadaan_umum_e') ?>

    <?php // echo $form->field($model, 'keadaan_umum_v') ?>

    <?php // echo $form->field($model, 'keadaan_umum_m') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_lokasi') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_sedasi') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_regional') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_ga_ett') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_ga_ntt') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_ga_ema') ?>

    <?php // echo $form->field($model, 'jenis_anestesi_ga_bm') ?>

    <?php // echo $form->field($model, 'posisi') ?>

    <?php // echo $form->field($model, 'perdarahan') ?>

    <?php // echo $form->field($model, 'urine') ?>

    <?php // echo $form->field($model, 'komplikasi') ?>

    <?php // echo $form->field($model, 'ekstubasi') ?>

    <?php // echo $form->field($model, 'jumlah_pack') ?>

    <?php // echo $form->field($model, 'dipindahkan_ke') ?>

    <?php // echo $form->field($model, 'serah_terima_pasien') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'nip_recovery_room') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
