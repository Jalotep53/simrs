<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanCutiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pengajuan-cuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_pengajuan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'tanggal_awal') ?>

    <?= $form->field($model, 'tanggal_akhir') ?>

    <?= $form->field($model, 'nik') ?>

    <?php // echo $form->field($model, 'urgensi') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'kepentingan') ?>

    <?php // echo $form->field($model, 'nik_pj') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
