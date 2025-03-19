<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratRak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-rak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rak')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
