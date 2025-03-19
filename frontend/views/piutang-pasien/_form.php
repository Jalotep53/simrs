<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="piutang-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_piutang')->textInput() ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Lunas' => 'Lunas', 'Belum Lunas' => 'Belum Lunas', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'totalpiutang')->textInput() ?>

    <?= $form->field($model, 'uangmuka')->textInput() ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <?= $form->field($model, 'tgltempo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
