<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-pemberian-obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_beli')->textInput() ?>

    <?= $form->field($model, 'biaya_obat')->textInput() ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <?= $form->field($model, 'embalase')->textInput() ?>

    <?= $form->field($model, 'tuslah')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Ralan' => 'Ralan', 'Ranap' => 'Ranap', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
