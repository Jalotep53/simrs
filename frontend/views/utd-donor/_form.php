<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdDonor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-donor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_donor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_pendonor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'dinas')->dropDownList([ 'Pagi' => 'Pagi', 'Siang' => 'Siang', 'Sore' => 'Sore', 'Malam' => 'Malam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bag')->textInput() ?>

    <?= $form->field($model, 'jenis_bag')->dropDownList([ 'SB' => 'SB', 'DB' => 'DB', 'TB' => 'TB', 'QB' => 'QB', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_donor')->dropDownList([ 'DB' => 'DB', 'DP' => 'DP', 'DS' => 'DS', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_aftap')->dropDownList([ 'Dalam Gedung' => 'Dalam Gedung', 'Luar Gedung' => 'Luar Gedung', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_aftap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hbsag')->dropDownList([ 'Negatif' => 'Negatif', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hcv')->dropDownList([ 'Negatif' => 'Negatif', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hiv')->dropDownList([ 'Negatif' => 'Negatif', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'spilis')->dropDownList([ 'Negatif' => 'Negatif', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'malaria')->dropDownList([ 'Negatif' => 'Negatif', 'Positif' => 'Positif', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_u_saring')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aman' => 'Aman', 'Cekal' => 'Cekal', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
