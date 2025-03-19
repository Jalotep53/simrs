<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\RekapPresensi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rekap-presensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'shift')->dropDownList([ 'Pagi' => 'Pagi', 'Pagi2' => 'Pagi2', 'Pagi3' => 'Pagi3', 'Pagi4' => 'Pagi4', 'Pagi5' => 'Pagi5', 'Pagi6' => 'Pagi6', 'Pagi7' => 'Pagi7', 'Pagi8' => 'Pagi8', 'Pagi9' => 'Pagi9', 'Pagi10' => 'Pagi10', 'Siang' => 'Siang', 'Siang2' => 'Siang2', 'Siang3' => 'Siang3', 'Siang4' => 'Siang4', 'Siang5' => 'Siang5', 'Siang6' => 'Siang6', 'Siang7' => 'Siang7', 'Siang8' => 'Siang8', 'Siang9' => 'Siang9', 'Siang10' => 'Siang10', 'Malam' => 'Malam', 'Malam2' => 'Malam2', 'Malam3' => 'Malam3', 'Malam4' => 'Malam4', 'Malam5' => 'Malam5', 'Malam6' => 'Malam6', 'Malam7' => 'Malam7', 'Malam8' => 'Malam8', 'Malam9' => 'Malam9', 'Malam10' => 'Malam10', 'Midle Pagi1' => 'Midle Pagi1', 'Midle Pagi2' => 'Midle Pagi2', 'Midle Pagi3' => 'Midle Pagi3', 'Midle Pagi4' => 'Midle Pagi4', 'Midle Pagi5' => 'Midle Pagi5', 'Midle Pagi6' => 'Midle Pagi6', 'Midle Pagi7' => 'Midle Pagi7', 'Midle Pagi8' => 'Midle Pagi8', 'Midle Pagi9' => 'Midle Pagi9', 'Midle Pagi10' => 'Midle Pagi10', 'Midle Siang1' => 'Midle Siang1', 'Midle Siang2' => 'Midle Siang2', 'Midle Siang3' => 'Midle Siang3', 'Midle Siang4' => 'Midle Siang4', 'Midle Siang5' => 'Midle Siang5', 'Midle Siang6' => 'Midle Siang6', 'Midle Siang7' => 'Midle Siang7', 'Midle Siang8' => 'Midle Siang8', 'Midle Siang9' => 'Midle Siang9', 'Midle Siang10' => 'Midle Siang10', 'Midle Malam1' => 'Midle Malam1', 'Midle Malam2' => 'Midle Malam2', 'Midle Malam3' => 'Midle Malam3', 'Midle Malam4' => 'Midle Malam4', 'Midle Malam5' => 'Midle Malam5', 'Midle Malam6' => 'Midle Malam6', 'Midle Malam7' => 'Midle Malam7', 'Midle Malam8' => 'Midle Malam8', 'Midle Malam9' => 'Midle Malam9', 'Midle Malam10' => 'Midle Malam10', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam_datang')->textInput() ?>

    <?= $form->field($model, 'jam_pulang')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Tepat Waktu' => 'Tepat Waktu', 'Terlambat Toleransi' => 'Terlambat Toleransi', 'Terlambat I' => 'Terlambat I', 'Terlambat II' => 'Terlambat II', 'Tepat Waktu & PSW' => 'Tepat Waktu & PSW', 'Terlambat Toleransi & PSW' => 'Terlambat Toleransi & PSW', 'Terlambat I & PSW' => 'Terlambat I & PSW', 'Terlambat II & PSW' => 'Terlambat II & PSW', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterlambatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'durasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
