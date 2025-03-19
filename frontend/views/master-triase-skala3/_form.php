<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala3 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-triase-skala3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_skala3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengkajian_skala3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
