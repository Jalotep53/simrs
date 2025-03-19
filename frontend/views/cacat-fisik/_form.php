<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CacatFisik $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cacat-fisik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_cacat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
