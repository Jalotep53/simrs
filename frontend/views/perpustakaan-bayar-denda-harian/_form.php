<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDendaHarian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-bayar-denda-harian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tgl_denda')->textInput() ?>

    <?= $form->field($model, 'no_anggota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_inventaris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterlambatan')->textInput() ?>

    <?= $form->field($model, 'besar_denda')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
