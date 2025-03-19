<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiOperator1 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-operasi-operator1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_operasi')->textInput() ?>

    <?= $form->field($model, 'biayaoperator1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
