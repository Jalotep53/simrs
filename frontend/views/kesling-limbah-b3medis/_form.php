<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KeslingLimbahB3medis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kesling-limbah-b3medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'jmllimbah')->textInput() ?>

    <?= $form->field($model, 'tujuan_penyerahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bukti_dokumen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sisa_di_tps')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
