<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPerawatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kategori-perawatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_kategori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
