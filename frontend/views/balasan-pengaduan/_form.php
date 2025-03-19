<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BalasanPengaduan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="balasan-pengaduan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pengaduan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pesan_balasan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
