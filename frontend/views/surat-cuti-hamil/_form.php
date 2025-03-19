<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratCutiHamil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-cuti-hamil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_hamil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terhitung_mulai')->textInput() ?>

    <?= $form->field($model, 'perkiraan_lahir')->textInput() ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
