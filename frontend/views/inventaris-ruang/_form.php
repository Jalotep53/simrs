<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisRuang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-ruang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ruang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
