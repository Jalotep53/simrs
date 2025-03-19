<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasuk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_urut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_surat')->textInput() ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_terima')->textInput() ?>

    <?= $form->field($model, 'kd_lemari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_map')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_sifat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lampiran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tembusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_deadline_balas')->textInput() ?>

    <?= $form->field($model, 'kd_balas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_klasifikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
