<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanResepPulang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-resep-pulang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_permintaan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_validasi')->textInput() ?>

    <?= $form->field($model, 'jam_validasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
