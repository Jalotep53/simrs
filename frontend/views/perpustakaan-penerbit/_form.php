<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPenerbit $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-penerbit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_penerbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website_penerbit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
