<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetDepoRalan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-depo-ralan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
