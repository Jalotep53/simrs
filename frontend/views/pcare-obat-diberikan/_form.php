<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PcareObatDiberikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pcare-obat-diberikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noKunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kdObatSK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_perawatan')->textInput() ?>

    <?= $form->field($model, 'jam')->textInput() ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
