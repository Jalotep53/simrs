<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RiwayatPenelitian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="riwayat-penelitian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jenis_penelitian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peranan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_penelitian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judul_jurnal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_penelitian')->textInput() ?>

    <?= $form->field($model, 'asal_dana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'berkas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
