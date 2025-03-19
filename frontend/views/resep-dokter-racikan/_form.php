<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepDokterRacikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-dokter-racikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_racik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_dr')->textInput() ?>

    <?= $form->field($model, 'aturan_pakai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
