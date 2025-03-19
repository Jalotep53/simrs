<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transfer-pasien-antar-ruang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal_masuk') ?>

    <?= $form->field($model, 'tanggal_pindah') ?>

    <?= $form->field($model, 'asal_ruang') ?>

    <?= $form->field($model, 'ruang_selanjutnya') ?>

    <?php // echo $form->field($model, 'diagnosa_utama') ?>

    <?php // echo $form->field($model, 'diagnosa_sekunder') ?>

    <?php // echo $form->field($model, 'indikasi_pindah_ruang') ?>

    <?php // echo $form->field($model, 'keterangan_indikasi_pindah_ruang') ?>

    <?php // echo $form->field($model, 'prosedur_yang_sudah_dilakukan') ?>

    <?php // echo $form->field($model, 'obat_yang_telah_diberikan') ?>

    <?php // echo $form->field($model, 'metode_pemindahan_pasien') ?>

    <?php // echo $form->field($model, 'peralatan_yang_menyertai') ?>

    <?php // echo $form->field($model, 'keterangan_peralatan_yang_menyertai') ?>

    <?php // echo $form->field($model, 'pemeriksaan_penunjang_yang_dilakukan') ?>

    <?php // echo $form->field($model, 'pasien_keluarga_menyetujui') ?>

    <?php // echo $form->field($model, 'nama_menyetujui') ?>

    <?php // echo $form->field($model, 'hubungan_menyetujui') ?>

    <?php // echo $form->field($model, 'keluhan_utama_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'keadaan_umum_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'td_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'nadi_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'rr_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'suhu_sebelum_transfer') ?>

    <?php // echo $form->field($model, 'keluhan_utama_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'keadaan_umum_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'td_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'nadi_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'rr_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'suhu_sesudah_transfer') ?>

    <?php // echo $form->field($model, 'nip_menyerahkan') ?>

    <?php // echo $form->field($model, 'nip_menerima') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
