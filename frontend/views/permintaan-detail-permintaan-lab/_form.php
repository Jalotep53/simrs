<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanDetailPermintaanLab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permintaan-detail-permintaan-lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'noorder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_jenis_prw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_template')->textInput() ?>

    <?= $form->field($model, 'stts_bayar')->dropDownList([ 'Sudah' => 'Sudah', 'Belum' => 'Belum', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
