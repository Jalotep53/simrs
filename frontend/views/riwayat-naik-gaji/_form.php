<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatNaikGaji $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-naik-gaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'pangkatjabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gapok')->textInput() ?>

    <?= $form->field($model, 'tmt_berkala')->textInput() ?>

    <?= $form->field($model, 'tmt_berkala_yad')->textInput() ?>

    <?= $form->field($model, 'no_sk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_sk')->textInput() ?>

    <?= $form->field($model, 'masa_kerja')->textInput() ?>

    <?= $form->field($model, 'bulan_kerja')->textInput() ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
