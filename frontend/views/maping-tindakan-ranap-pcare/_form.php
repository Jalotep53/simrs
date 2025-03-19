<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingTindakanRanapPcare $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-tindakan-ranap-pcare-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_tindakan_pcare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_tindakan_pcare')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
