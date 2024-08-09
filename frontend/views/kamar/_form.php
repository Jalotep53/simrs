<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Kamar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trf_kamar')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'ISI' => 'ISI', 'KOSONG' => 'KOSONG', 'DIBERSIHKAN' => 'DIBERSIHKAN', 'DIBOOKING' => 'DIBOOKING', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'statusdata')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
