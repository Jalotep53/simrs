<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Sidikjaripasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sidikjaripasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rkm_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sidikjari')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
