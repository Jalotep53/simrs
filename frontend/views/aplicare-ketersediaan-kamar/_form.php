<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AplicareKetersediaanKamar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="aplicare-ketersediaan-kamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_kelas_aplicare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_bangsal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'tersedia')->textInput() ?>

    <?= $form->field($model, 'tersediapria')->textInput() ?>

    <?= $form->field($model, 'tersediawanita')->textInput() ?>

    <?= $form->field($model, 'tersediapriawanita')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
