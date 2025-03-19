<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AkunPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="akun-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
