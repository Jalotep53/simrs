<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KelompokJabatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kelompok-jabatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_kelompok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kelompok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indek')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
