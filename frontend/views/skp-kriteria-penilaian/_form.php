<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKriteriaPenilaian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skp-kriteria-penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_kriteria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kriteria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kategori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
