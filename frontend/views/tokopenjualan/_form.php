<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopenjualan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tokopenjualan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_jual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_jual')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_jual')->dropDownList([ 'Distributor' => 'Distributor', 'Grosir' => 'Grosir', 'Retail' => 'Retail', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ongkir')->textInput() ?>

    <?= $form->field($model, 'ppn')->textInput() ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'nama_bayar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
