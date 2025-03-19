<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtdSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-utd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_jenis_prw') ?>

    <?= $form->field($model, 'id_template') ?>

    <?= $form->field($model, 'pemeriksaan') ?>

    <?= $form->field($model, 'nilai_rujukan') ?>

    <?= $form->field($model, 'bagian_rs') ?>

    <?php // echo $form->field($model, 'bhp') ?>

    <?php // echo $form->field($model, 'bagian_perujuk') ?>

    <?php // echo $form->field($model, 'bagian_dokter') ?>

    <?php // echo $form->field($model, 'petugas_utd') ?>

    <?php // echo $form->field($model, 'kso') ?>

    <?php // echo $form->field($model, 'menejemen') ?>

    <?php // echo $form->field($model, 'biaya_item') ?>

    <?php // echo $form->field($model, 'urut') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
