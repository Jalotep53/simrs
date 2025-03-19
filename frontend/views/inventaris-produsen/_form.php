<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisProdusen $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-produsen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_produsen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_produsen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_produsen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website_produsen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
