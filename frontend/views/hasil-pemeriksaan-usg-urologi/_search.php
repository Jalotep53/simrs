<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgUrologiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-usg-urologi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'ginjal_kanan') ?>

    <?php // echo $form->field($model, 'ginjal_kiri') ?>

    <?php // echo $form->field($model, 'vesica_urinaria') ?>

    <?php // echo $form->field($model, 'tambahan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
