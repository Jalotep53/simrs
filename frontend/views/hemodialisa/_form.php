<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Hemodialisa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hemodialisa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dialist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penarikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ureum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbsag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creatinin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hiv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hcv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
