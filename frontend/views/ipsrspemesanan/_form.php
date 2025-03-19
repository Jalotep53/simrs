<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrspemesanan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ipsrspemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_suplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pesan')->textInput() ?>

    <?= $form->field($model, 'tgl_faktur')->textInput() ?>

    <?= $form->field($model, 'tgl_tempo')->textInput() ?>

    <?= $form->field($model, 'total1')->textInput() ?>

    <?= $form->field($model, 'potongan')->textInput() ?>

    <?= $form->field($model, 'total2')->textInput() ?>

    <?= $form->field($model, 'ppn')->textInput() ?>

    <?= $form->field($model, 'meterai')->textInput() ?>

    <?= $form->field($model, 'tagihan')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Sudah Dibayar' => 'Sudah Dibayar', 'Belum Dibayar' => 'Belum Dibayar', 'Belum Lunas' => 'Belum Lunas', 'Titip Faktur' => 'Titip Faktur', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
