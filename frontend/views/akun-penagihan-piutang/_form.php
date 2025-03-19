<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPenagihanPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akun-penagihan-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atas_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rek')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
