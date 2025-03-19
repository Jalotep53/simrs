<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\JawabanPioApoteker $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jawaban-pio-apoteker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_permintaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_jawab')->textInput() ?>

    <?= $form->field($model, 'metode')->dropDownList([ 'Lisan' => 'Lisan', 'Tertulis' => 'Tertulis', 'Telepon' => 'Telepon', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'penyampaian_jawaban')->dropDownList([ 'Segera' => 'Segera', 'Dalam 24 Jam' => 'Dalam 24 Jam', 'Lebih Dari 24 Jam' => 'Lebih Dari 24 Jam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jawaban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
