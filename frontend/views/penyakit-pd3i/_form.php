<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenyakitPd3i $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penyakit-pd3i-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_penyakit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
