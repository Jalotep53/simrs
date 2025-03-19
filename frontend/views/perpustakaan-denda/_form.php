<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanDenda $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-denda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_denda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_denda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_denda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
