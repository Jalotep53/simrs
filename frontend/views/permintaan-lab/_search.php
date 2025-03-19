<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-lab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'noorder') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_permintaan') ?>

    <?= $form->field($model, 'jam_permintaan') ?>

    <?= $form->field($model, 'tgl_sampel') ?>

    <?php // echo $form->field($model, 'jam_sampel') ?>

    <?php // echo $form->field($model, 'tgl_hasil') ?>

    <?php // echo $form->field($model, 'jam_hasil') ?>

    <?php // echo $form->field($model, 'dokter_perujuk') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'informasi_tambahan') ?>

    <?php // echo $form->field($model, 'diagnosa_klinis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
