<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSuratPriBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-surat-pri-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kartu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_surat')->textInput() ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_rencana')->textInput() ?>

    <?= $form->field($model, 'kd_dokter_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_dokter_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_poli_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_poli_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
