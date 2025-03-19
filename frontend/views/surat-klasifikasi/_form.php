<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKlasifikasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-klasifikasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klasifikasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
