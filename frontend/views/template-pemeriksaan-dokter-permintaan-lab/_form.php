<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPermintaanLab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-pemeriksaan-dokter-permintaan-lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
