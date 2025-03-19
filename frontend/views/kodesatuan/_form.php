<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Kodesatuan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kodesatuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
