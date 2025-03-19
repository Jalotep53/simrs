<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BayarOperasiDokterAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bayar-operasi-dokter-anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_paket')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_operasi')->textInput() ?>

    <?= $form->field($model, 'biayadokter_anak')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
