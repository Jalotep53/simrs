<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\FollowUpDbd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="follow-up-dbd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam_rawat')->textInput() ?>

    <?= $form->field($model, 'hemoglobin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hematokrit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leokosit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trombosit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terapi_cairan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
