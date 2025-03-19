<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsJenisPekerjaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-jenis-pekerjaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_pekerjaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
