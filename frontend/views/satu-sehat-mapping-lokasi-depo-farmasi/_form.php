<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMappingLokasiDepoFarmasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-mapping-lokasi-depo-farmasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_organisasi_satusehat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_lokasi_satusehat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altittude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
