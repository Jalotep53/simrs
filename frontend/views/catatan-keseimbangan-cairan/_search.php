<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanKeseimbanganCairanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-keseimbangan-cairan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tgl_perawatan') ?>

    <?= $form->field($model, 'jam_rawat') ?>

    <?= $form->field($model, 'infus') ?>

    <?= $form->field($model, 'tranfusi') ?>

    <?php // echo $form->field($model, 'minum') ?>

    <?php // echo $form->field($model, 'urine') ?>

    <?php // echo $form->field($model, 'drain') ?>

    <?php // echo $form->field($model, 'ngt') ?>

    <?php // echo $form->field($model, 'iwl') ?>

    <?php // echo $form->field($model, 'keseimbangan') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
