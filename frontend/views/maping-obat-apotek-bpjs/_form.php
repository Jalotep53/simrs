<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MapingObatApotekBpjs $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maping-obat-apotek-bpjs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng_apotek_bpjs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_brng_apotek_bpjs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
