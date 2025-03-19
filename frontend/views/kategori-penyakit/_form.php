<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPenyakit $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kategori-penyakit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_ktg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciri_umum')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
