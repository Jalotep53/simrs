<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KonverSat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="konver-sat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nilai')->textInput() ?>

    <?= $form->field($model, 'kode_sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_konversi')->textInput() ?>

    <?= $form->field($model, 'sat_konversi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
