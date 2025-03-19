<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JurnalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jurnal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_jurnal') ?>

    <?= $form->field($model, 'no_bukti') ?>

    <?= $form->field($model, 'tgl_jurnal') ?>

    <?= $form->field($model, 'jam_jurnal') ?>

    <?= $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
