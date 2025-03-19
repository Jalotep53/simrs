<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkpKategoriPenilaian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skp-kategori-penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sasaran')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
