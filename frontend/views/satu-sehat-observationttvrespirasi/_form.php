<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatObservationttvrespirasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-observationttvrespirasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ralan' => 'Ralan', 'Ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_observation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
