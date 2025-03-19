<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPenolakanAnjuranMedisSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-penolakan-anjuran-medis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'hubungan') ?>

    <?= $form->field($model, 'nama_pj') ?>

    <?php // echo $form->field($model, 'umur_pj') ?>

    <?php // echo $form->field($model, 'no_ktppj') ?>

    <?php // echo $form->field($model, 'jkpj') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'kode_penolakan') ?>

    <?php // echo $form->field($model, 'alasan_penolakan') ?>

    <?php // echo $form->field($model, 'informasi_risiko_penolakan') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
