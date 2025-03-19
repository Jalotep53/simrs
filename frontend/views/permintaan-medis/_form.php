<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Baru' => 'Baru', 'Disetujui' => 'Disetujui', 'Tidak Disetujui' => 'Tidak Disetujui', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_bangsaltujuan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
