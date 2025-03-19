<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ReferensiMobilejknBpjsBatal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="referensi-mobilejkn-bpjs-batal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat_batal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomorreferensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalbatal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statuskirim')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nobooking')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
