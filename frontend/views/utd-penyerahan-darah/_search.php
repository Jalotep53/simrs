<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenyerahanDarahSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penyerahan-darah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_penyerahan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'dinas') ?>

    <?= $form->field($model, 'nip_cross') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'kd_rek') ?>

    <?php // echo $form->field($model, 'pengambil_darah') ?>

    <?php // echo $form->field($model, 'alamat_pengambil_darah') ?>

    <?php // echo $form->field($model, 'nip_pj') ?>

    <?php // echo $form->field($model, 'besarppn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
