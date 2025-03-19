<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDenda $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-bayar-denda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_denda')->textInput() ?>

    <?= $form->field($model, 'no_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_inventaris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_denda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'besar_denda')->textInput() ?>

    <?= $form->field($model, 'keterangan_denda')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
