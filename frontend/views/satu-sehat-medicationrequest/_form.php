<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SatuSehatMedicationrequest $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="satu-sehat-medicationrequest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_resep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_medicationrequest')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
