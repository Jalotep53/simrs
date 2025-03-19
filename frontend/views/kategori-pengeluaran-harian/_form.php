<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPengeluaranHarian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kategori-pengeluaran-harian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
