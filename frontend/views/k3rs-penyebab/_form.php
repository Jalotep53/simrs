<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPenyebab $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="k3rs-penyebab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_penyebab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penyebab_kecelakaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
