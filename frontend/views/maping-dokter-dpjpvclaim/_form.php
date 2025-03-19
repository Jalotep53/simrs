<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingDokterDpjpvclaim $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-dokter-dpjpvclaim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_dokter_bpjs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
