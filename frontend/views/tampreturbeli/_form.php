<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Tampreturbeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tampreturbeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'satuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_beli')->textInput() ?>

    <?= $form->field($model, 'jml_beli')->textInput() ?>

    <?= $form->field($model, 'h_retur')->textInput() ?>

    <?= $form->field($model, 'jml_retur')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'no_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_retur2')->textInput() ?>

    <?= $form->field($model, 'kadaluarsa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
