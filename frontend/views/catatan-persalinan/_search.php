<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanPersalinanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-persalinan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'mulai') ?>

    <?= $form->field($model, 'selesai') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'catatan') ?>

    <?php // echo $form->field($model, 'waktu_persalinan_kala_1') ?>

    <?php // echo $form->field($model, 'waktu_persalinan_kala_2') ?>

    <?php // echo $form->field($model, 'waktu_persalinan_kala_3') ?>

    <?php // echo $form->field($model, 'waktu_persalinan_jumlah') ?>

    <?php // echo $form->field($model, 'perineum') ?>

    <?php // echo $form->field($model, 'jahitan_luar_1') ?>

    <?php // echo $form->field($model, 'jahitan_luar_2') ?>

    <?php // echo $form->field($model, 'jahitan_dalam_1') ?>

    <?php // echo $form->field($model, 'jahitan_dalam_2') ?>

    <?php // echo $form->field($model, 'anak') ?>

    <?php // echo $form->field($model, 'status_lahir') ?>

    <?php // echo $form->field($model, 'apgar_score') ?>

    <?php // echo $form->field($model, 'bb') ?>

    <?php // echo $form->field($model, 'pb') ?>

    <?php // echo $form->field($model, 'kelainan') ?>

    <?php // echo $form->field($model, 'ketuban') ?>

    <?php // echo $form->field($model, 'placenta') ?>

    <?php // echo $form->field($model, 'ukuran') ?>

    <?php // echo $form->field($model, 'tali_pusat') ?>

    <?php // echo $form->field($model, 'insertio') ?>

    <?php // echo $form->field($model, 'darah_keluar_kala_1') ?>

    <?php // echo $form->field($model, 'darah_keluar_kala_2') ?>

    <?php // echo $form->field($model, 'darah_keluar_kala_3') ?>

    <?php // echo $form->field($model, 'darah_keluar_kala_4') ?>

    <?php // echo $form->field($model, 'darah_keluar_jumlah') ?>

    <?php // echo $form->field($model, 'kondisi_umum') ?>

    <?php // echo $form->field($model, 'td') ?>

    <?php // echo $form->field($model, 'nadi') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'suhu') ?>

    <?php // echo $form->field($model, 'kontraksi_uterus') ?>

    <?php // echo $form->field($model, 'ppv') ?>

    <?php // echo $form->field($model, 'pengobatan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
