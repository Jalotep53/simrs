<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisMerk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-merk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_merk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_merk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
