<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkorBromagePascaAnestesiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skor-bromage-pasca-anestesi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'penilaian_skala1') ?>

    <?= $form->field($model, 'penilaian_nilai1') ?>

    <?= $form->field($model, 'keluar') ?>

    <?php // echo $form->field($model, 'instruksi') ?>

    <?php // echo $form->field($model, 'kd_dokter') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
