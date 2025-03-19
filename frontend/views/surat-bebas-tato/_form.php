<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBebasTato $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-bebas-tato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalperiksa')->textInput() ?>

    <?= $form->field($model, 'hasilperiksa')->dropDownList([ 'Bebas Tato' => 'Bebas Tato', 'Bertato' => 'Bertato', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keperluan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
