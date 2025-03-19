<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingSrbBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-srb-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_sep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_srb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_srb')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodeprogram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaprogram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kodedpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmdpjp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
