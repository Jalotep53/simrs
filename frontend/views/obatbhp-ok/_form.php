<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ObatbhpOk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obatbhp-ok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hargasatuan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
