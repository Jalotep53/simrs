<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdCekalDarah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-cekal-darah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_donor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'dinas')->dropDownList([ 'Pagi' => 'Pagi', 'Siang' => 'Siang', 'Sore' => 'Sore', 'Malam' => 'Malam', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'petugas_pemusnahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
