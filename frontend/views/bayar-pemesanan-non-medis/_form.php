<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarPemesananNonMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-pemesanan-non-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_bayar')->textInput() ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_bayar')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_bukti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
