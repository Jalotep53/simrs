<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateUtd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-utd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagian_rs')->textInput() ?>

    <?= $form->field($model, 'bhp')->textInput() ?>

    <?= $form->field($model, 'bagian_perujuk')->textInput() ?>

    <?= $form->field($model, 'bagian_dokter')->textInput() ?>

    <?= $form->field($model, 'petugas_utd')->textInput() ?>

    <?= $form->field($model, 'kso')->textInput() ?>

    <?= $form->field($model, 'menejemen')->textInput() ?>

    <?= $form->field($model, 'biaya_item')->textInput() ?>

    <?= $form->field($model, 'urut')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
