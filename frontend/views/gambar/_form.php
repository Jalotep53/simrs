<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Gambar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gambar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inde')->textInput() ?>

    <?= $form->field($model, 'bpjs')->textInput() ?>

    <?= $form->field($model, 'nyeri')->textInput() ?>

    <?= $form->field($model, 'inhealth')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
