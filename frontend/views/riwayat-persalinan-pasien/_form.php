<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPersalinanPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-persalinan-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_thn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_persalinan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia_hamil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_persalinan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penolong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyulit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'L' => 'L', 'P' => 'P', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bbpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keadaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
