<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdprimer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-triase-igdprimer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluhan_utama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kebutuhan_khusus')->dropDownList([ '-' => '-', 'UPPA' => 'UPPA', 'Airborne' => 'Airborne', 'Dekontaminan' => 'Dekontaminan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plan')->dropDownList([ 'Ruang Resusitasi' => 'Ruang Resusitasi', 'Ruang Kritis' => 'Ruang Kritis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggaltriase')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
