<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatchSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-batch-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_batch') ?>

    <?= $form->field($model, 'kode_brng') ?>

    <?= $form->field($model, 'tgl_beli') ?>

    <?= $form->field($model, 'tgl_kadaluarsa') ?>

    <?= $form->field($model, 'asal') ?>

    <?php // echo $form->field($model, 'no_faktur') ?>

    <?php // echo $form->field($model, 'dasar') ?>

    <?php // echo $form->field($model, 'h_beli') ?>

    <?php // echo $form->field($model, 'ralan') ?>

    <?php // echo $form->field($model, 'kelas1') ?>

    <?php // echo $form->field($model, 'kelas2') ?>

    <?php // echo $form->field($model, 'kelas3') ?>

    <?php // echo $form->field($model, 'utama') ?>

    <?php // echo $form->field($model, 'vip') ?>

    <?php // echo $form->field($model, 'vvip') ?>

    <?php // echo $form->field($model, 'beliluar') ?>

    <?php // echo $form->field($model, 'jualbebas') ?>

    <?php // echo $form->field($model, 'karyawan') ?>

    <?php // echo $form->field($model, 'jumlahbeli') ?>

    <?php // echo $form->field($model, 'sisa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
