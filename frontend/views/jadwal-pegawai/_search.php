<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalPegawaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jadwal-pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'h1') ?>

    <?= $form->field($model, 'h2') ?>

    <?php // echo $form->field($model, 'h3') ?>

    <?php // echo $form->field($model, 'h4') ?>

    <?php // echo $form->field($model, 'h5') ?>

    <?php // echo $form->field($model, 'h6') ?>

    <?php // echo $form->field($model, 'h7') ?>

    <?php // echo $form->field($model, 'h8') ?>

    <?php // echo $form->field($model, 'h9') ?>

    <?php // echo $form->field($model, 'h10') ?>

    <?php // echo $form->field($model, 'h11') ?>

    <?php // echo $form->field($model, 'h12') ?>

    <?php // echo $form->field($model, 'h13') ?>

    <?php // echo $form->field($model, 'h14') ?>

    <?php // echo $form->field($model, 'h15') ?>

    <?php // echo $form->field($model, 'h16') ?>

    <?php // echo $form->field($model, 'h17') ?>

    <?php // echo $form->field($model, 'h18') ?>

    <?php // echo $form->field($model, 'h19') ?>

    <?php // echo $form->field($model, 'h20') ?>

    <?php // echo $form->field($model, 'h21') ?>

    <?php // echo $form->field($model, 'h22') ?>

    <?php // echo $form->field($model, 'h23') ?>

    <?php // echo $form->field($model, 'h24') ?>

    <?php // echo $form->field($model, 'h25') ?>

    <?php // echo $form->field($model, 'h26') ?>

    <?php // echo $form->field($model, 'h27') ?>

    <?php // echo $form->field($model, 'h28') ?>

    <?php // echo $form->field($model, 'h29') ?>

    <?php // echo $form->field($model, 'h30') ?>

    <?php // echo $form->field($model, 'h31') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
