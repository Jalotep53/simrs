<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenundaanPelayananSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="persetujuan-penundaan-pelayanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'nama_pj') ?>

    <?= $form->field($model, 'umur_pj') ?>

    <?php // echo $form->field($model, 'no_ktppj') ?>

    <?php // echo $form->field($model, 'alamatpj') ?>

    <?php // echo $form->field($model, 'no_telppj') ?>

    <?php // echo $form->field($model, 'hubungan') ?>

    <?php // echo $form->field($model, 'ruang') ?>

    <?php // echo $form->field($model, 'dokter_pengirim') ?>

    <?php // echo $form->field($model, 'pelayanan_dilakukan') ?>

    <?php // echo $form->field($model, 'ditunda_karena') ?>

    <?php // echo $form->field($model, 'keterangan_ditunda') ?>

    <?php // echo $form->field($model, 'alternatif_diberikan') ?>

    <?php // echo $form->field($model, 'keterangan_alternatif_diberikan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
