<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CatatanAdimeGizi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="catatan-adime-gizi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'asesmen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intervensi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitoring')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evaluasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instruksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
