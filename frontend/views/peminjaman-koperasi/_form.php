<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PeminjamanKoperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjaman-koperasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'pinjaman')->textInput() ?>

    <?= $form->field($model, 'banyak_angsur')->textInput() ?>

    <?= $form->field($model, 'pokok')->textInput() ?>

    <?= $form->field($model, 'jasa')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Lunas' => 'Lunas', 'Belum Lunas' => 'Belum Lunas', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
