<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PasienMati $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-mati-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp_meninggal')->dropDownList([ '-' => '-', 'Rumah Sakit' => 'Rumah Sakit', 'Puskesmas' => 'Puskesmas', 'Rumah Bersalin' => 'Rumah Bersalin', 'Rumah Tempat Tinggal' => 'Rumah Tempat Tinggal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'icd1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
