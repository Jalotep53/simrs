<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RujukMasuk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rujuk-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jm_perujuk')->textInput() ?>

    <?= $form->field($model, 'dokter_perujuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_rujuk')->dropDownList([ '-' => '-', 'Bedah' => 'Bedah', 'Non-Bedah' => 'Non-Bedah', 'Kebidanan' => 'Kebidanan', 'Anak' => 'Anak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_balasan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
