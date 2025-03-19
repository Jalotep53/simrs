<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaCorona $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="diagnosa-corona-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_icd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Primer' => 'Primer', 'Sekunder' => 'Sekunder', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
