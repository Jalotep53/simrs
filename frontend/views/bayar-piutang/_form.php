<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_bayar')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_cicilan')->textInput() ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek_kontra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diskon_piutang')->textInput() ?>

    <?= $form->field($model, 'kd_rek_diskon_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tidak_terbayar')->textInput() ?>

    <?= $form->field($model, 'kd_rek_tidak_terbayar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
