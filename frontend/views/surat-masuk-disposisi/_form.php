<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukDisposisi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-masuk-disposisi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_disposisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_indeks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_urut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_selesai')->textInput() ?>

    <?= $form->field($model, 'isi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diteruskan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_kembali')->textInput() ?>

    <?= $form->field($model, 'kepada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengesahan')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'harap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
