<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatSeminarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-seminar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tingkat') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'nama_seminar') ?>

    <?= $form->field($model, 'peranan') ?>

    <?php // echo $form->field($model, 'mulai') ?>

    <?php // echo $form->field($model, 'selesai') ?>

    <?php // echo $form->field($model, 'penyelengara') ?>

    <?php // echo $form->field($model, 'tempat') ?>

    <?php // echo $form->field($model, 'berkas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
