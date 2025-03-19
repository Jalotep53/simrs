<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulanganSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perencanaan-pemulangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'rencana_pulang') ?>

    <?= $form->field($model, 'alasan_masuk') ?>

    <?= $form->field($model, 'diagnosa_medis') ?>

    <?= $form->field($model, 'pengaruh_ri_pasien_dan_keluarga') ?>

    <?php // echo $form->field($model, 'keterangan_pengaruh_ri_pasien_dan_keluarga') ?>

    <?php // echo $form->field($model, 'pengaruh_ri_pekerjaan_sekolah') ?>

    <?php // echo $form->field($model, 'keterangan_pengaruh_ri_pekerjaan_sekolah') ?>

    <?php // echo $form->field($model, 'pengaruh_ri_keuangan') ?>

    <?php // echo $form->field($model, 'keterangan_pengaruh_ri_keuangan') ?>

    <?php // echo $form->field($model, 'antisipasi_masalah_saat_pulang') ?>

    <?php // echo $form->field($model, 'keterangan_antisipasi_masalah_saat_pulang') ?>

    <?php // echo $form->field($model, 'bantuan_diperlukan_dalam') ?>

    <?php // echo $form->field($model, 'keterangan_bantuan_diperlukan_dalam') ?>

    <?php // echo $form->field($model, 'adakah_yang_membantu_keperluan') ?>

    <?php // echo $form->field($model, 'keterangan_adakah_yang_membantu_keperluan') ?>

    <?php // echo $form->field($model, 'pasien_tinggal_sendiri') ?>

    <?php // echo $form->field($model, 'keterangan_pasien_tinggal_sendiri') ?>

    <?php // echo $form->field($model, 'pasien_menggunakan_peralatan_medis') ?>

    <?php // echo $form->field($model, 'keterangan_pasien_menggunakan_peralatan_medis') ?>

    <?php // echo $form->field($model, 'pasien_memerlukan_alat_bantu') ?>

    <?php // echo $form->field($model, 'keterangan_pasien_memerlukan_alat_bantu') ?>

    <?php // echo $form->field($model, 'memerlukan_perawatan_khusus') ?>

    <?php // echo $form->field($model, 'keterangan_memerlukan_perawatan_khusus') ?>

    <?php // echo $form->field($model, 'bermasalah_memenuhi_kebutuhan') ?>

    <?php // echo $form->field($model, 'keterangan_bermasalah_memenuhi_kebutuhan') ?>

    <?php // echo $form->field($model, 'memiliki_nyeri_kronis') ?>

    <?php // echo $form->field($model, 'keterangan_memiliki_nyeri_kronis') ?>

    <?php // echo $form->field($model, 'memerlukan_edukasi_kesehatan') ?>

    <?php // echo $form->field($model, 'keterangan_memerlukan_edukasi_kesehatan') ?>

    <?php // echo $form->field($model, 'memerlukan_keterampilkan_khusus') ?>

    <?php // echo $form->field($model, 'keterangan_memerlukan_keterampilkan_khusus') ?>

    <?php // echo $form->field($model, 'nama_pasien_keluarga') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
