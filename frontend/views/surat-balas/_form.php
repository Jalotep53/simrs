<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBalas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-balas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
