<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsDampakCidera $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-dampak-cidera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_dampak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dampak_cidera')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
