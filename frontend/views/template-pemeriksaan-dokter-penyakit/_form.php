<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPenyakit $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-pemeriksaan-dokter-penyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urut')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
