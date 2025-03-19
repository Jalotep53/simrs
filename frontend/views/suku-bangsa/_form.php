<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SukuBangsa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="suku-bangsa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_suku_bangsa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
