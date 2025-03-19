<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPendidikanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-pendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pendidikan') ?>

    <?= $form->field($model, 'sekolah') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?= $form->field($model, 'thn_lulus') ?>

    <?php // echo $form->field($model, 'kepala') ?>

    <?php // echo $form->field($model, 'pendanaan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
