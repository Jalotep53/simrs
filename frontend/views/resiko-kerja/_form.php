<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ResikoKerja $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="resiko-kerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_resiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_resiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
