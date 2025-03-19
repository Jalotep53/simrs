<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPenagihanPiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-penagihan-piutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
