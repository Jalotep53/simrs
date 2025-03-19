<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resep-luar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_peresepan')->textInput() ?>

    <?= $form->field($model, 'jam_peresepan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
