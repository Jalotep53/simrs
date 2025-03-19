<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarJmDokter $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-jm-dokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_bayar')->textInput() ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rawatjalan')->textInput() ?>

    <?= $form->field($model, 'rawatinap')->textInput() ?>

    <?= $form->field($model, 'labrawatjalan')->textInput() ?>

    <?= $form->field($model, 'labrawatinap')->textInput() ?>

    <?= $form->field($model, 'radrawatjalan')->textInput() ?>

    <?= $form->field($model, 'radrawatinap')->textInput() ?>

    <?= $form->field($model, 'operasiralan')->textInput() ?>

    <?= $form->field($model, 'operasiranap')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
