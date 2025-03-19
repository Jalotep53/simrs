<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRanap $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-harga-obat-ranap-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->dropDownList([ 'Kelas 1' => 'Kelas 1', 'Kelas 2' => 'Kelas 2', 'Kelas 3' => 'Kelas 3', 'Kelas Utama' => 'Kelas Utama', 'Kelas VIP' => 'Kelas VIP', 'Kelas VVIP' => 'Kelas VVIP', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'hargajual')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
