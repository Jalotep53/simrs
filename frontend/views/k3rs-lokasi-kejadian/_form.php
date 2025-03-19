<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsLokasiKejadian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-lokasi-kejadian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_kejadian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
