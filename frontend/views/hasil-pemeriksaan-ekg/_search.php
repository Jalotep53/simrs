<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanEkgSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-ekg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'diagnosa_klinis') ?>

    <?= $form->field($model, 'kiriman_dari') ?>

    <?php // echo $form->field($model, 'irama') ?>

    <?php // echo $form->field($model, 'laju_jantung') ?>

    <?php // echo $form->field($model, 'gelombangp') ?>

    <?php // echo $form->field($model, 'intervalpr') ?>

    <?php // echo $form->field($model, 'axis') ?>

    <?php // echo $form->field($model, 'kompleksqrs') ?>

    <?php // echo $form->field($model, 'segmenst') ?>

    <?php // echo $form->field($model, 'gelombangt') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
