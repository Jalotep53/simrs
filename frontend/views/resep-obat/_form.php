<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_peresepan')->textInput() ?>

    <?= $form->field($model, 'jam_peresepan')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ralan' => 'Ralan', 'ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_penyerahan')->textInput() ?>

    <?= $form->field($model, 'jam_penyerahan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
