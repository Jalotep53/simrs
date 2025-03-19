<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator1Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-operasi-operator1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_bayar') ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'kode_paket') ?>

    <?= $form->field($model, 'tgl_operasi') ?>

    <?= $form->field($model, 'biayaoperator1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
