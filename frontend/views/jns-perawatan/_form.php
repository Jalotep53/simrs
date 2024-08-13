<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JnsPerawatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jns-perawatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_perawatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material')->textInput() ?>

    <?= $form->field($model, 'bhp')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakandr')->textInput() ?>

    <?= $form->field($model, 'tarif_tindakanpr')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'menejemen')->textInput() ?>

    <?= $form->field($model, 'total_byrdr')->textInput() ?>

    <?= $form->field($model, 'total_byrpr')->textInput() ?>

    <?= $form->field($model, 'total_byrdrpr')->textInput() ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
