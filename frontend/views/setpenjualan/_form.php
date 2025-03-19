<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Setpenjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setpenjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ralan')->textInput() ?>

    <?= $form->field($model, 'kelas1')->textInput() ?>

    <?= $form->field($model, 'kelas2')->textInput() ?>

    <?= $form->field($model, 'kelas3')->textInput() ?>

    <?= $form->field($model, 'utama')->textInput() ?>

    <?= $form->field($model, 'vip')->textInput() ?>

    <?= $form->field($model, 'vvip')->textInput() ?>

    <?= $form->field($model, 'beliluar')->textInput() ?>

    <?= $form->field($model, 'jualbebas')->textInput() ?>

    <?= $form->field($model, 'karyawan')->textInput() ?>

    <?= $form->field($model, 'kdjns')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
