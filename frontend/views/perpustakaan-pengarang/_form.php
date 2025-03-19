<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanPengarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perpustakaan-pengarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pengarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pengarang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
