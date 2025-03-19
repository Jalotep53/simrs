<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisLuka $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-jenis-luka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_luka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_luka')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
