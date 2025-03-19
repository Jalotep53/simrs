<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSrbBpjsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-srb-bpjs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_sep') ?>

    <?= $form->field($model, 'no_srb') ?>

    <?= $form->field($model, 'tgl_srb') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'kodeprogram') ?>

    <?php // echo $form->field($model, 'namaprogram') ?>

    <?php // echo $form->field($model, 'kodedpjp') ?>

    <?php // echo $form->field($model, 'nmdpjp') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'saran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
