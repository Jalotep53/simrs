<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenunjangRusak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-penunjang-rusak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
