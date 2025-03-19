<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatSeminar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-seminar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'tingkat')->dropDownList([ 'Local' => 'Local', 'Regional' => 'Regional', 'Nasional' => 'Nasional', 'Internasional' => 'Internasional', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'WORKSHOP' => 'WORKSHOP', 'SIMPOSIUM' => 'SIMPOSIUM', 'SEMINAR' => 'SEMINAR', 'FGD' => 'FGD', 'PELATIHAN' => 'PELATIHAN', 'LAINNYA' => 'LAINNYA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_seminar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peranan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mulai')->textInput() ?>

    <?= $form->field($model, 'selesai')->textInput() ?>

    <?= $form->field($model, 'penyelengara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
