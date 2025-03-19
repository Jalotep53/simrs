<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PaketOperasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="paket-operasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_paket') ?>

    <?= $form->field($model, 'nm_perawatan') ?>

    <?= $form->field($model, 'kategori') ?>

    <?= $form->field($model, 'operator1') ?>

    <?= $form->field($model, 'operator2') ?>

    <?php // echo $form->field($model, 'operator3') ?>

    <?php // echo $form->field($model, 'asisten_operator1') ?>

    <?php // echo $form->field($model, 'asisten_operator2') ?>

    <?php // echo $form->field($model, 'asisten_operator3') ?>

    <?php // echo $form->field($model, 'instrumen') ?>

    <?php // echo $form->field($model, 'dokter_anak') ?>

    <?php // echo $form->field($model, 'perawaat_resusitas') ?>

    <?php // echo $form->field($model, 'dokter_anestesi') ?>

    <?php // echo $form->field($model, 'asisten_anestesi') ?>

    <?php // echo $form->field($model, 'asisten_anestesi2') ?>

    <?php // echo $form->field($model, 'bidan') ?>

    <?php // echo $form->field($model, 'bidan2') ?>

    <?php // echo $form->field($model, 'bidan3') ?>

    <?php // echo $form->field($model, 'perawat_luar') ?>

    <?php // echo $form->field($model, 'sewa_ok') ?>

    <?php // echo $form->field($model, 'alat') ?>

    <?php // echo $form->field($model, 'akomodasi') ?>

    <?php // echo $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'omloop') ?>

    <?php // echo $form->field($model, 'omloop2') ?>

    <?php // echo $form->field($model, 'omloop3') ?>

    <?php // echo $form->field($model, 'omloop4') ?>

    <?php // echo $form->field($model, 'omloop5') ?>

    <?php // echo $form->field($model, 'sarpras') ?>

    <?php // echo $form->field($model, 'dokter_pjanak') ?>

    <?php // echo $form->field($model, 'dokter_umum') ?>

    <?php // echo $form->field($model, 'kd_pj') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kelas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
