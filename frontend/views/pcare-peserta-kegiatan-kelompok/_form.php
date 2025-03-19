<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcarePesertaKegiatanKelompok $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-peserta-kegiatan-kelompok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eduId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
