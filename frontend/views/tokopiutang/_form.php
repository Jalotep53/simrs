<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Tokopiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tokopiutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota_piutang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_piutang')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jns_jual')->dropDownList([ 'Distributor' => 'Distributor', 'Grosir' => 'Grosir', 'Retail' => 'Retail', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ongkir')->textInput() ?>

    <?= $form->field($model, 'uangmuka')->textInput() ?>

    <?= $form->field($model, 'sisapiutang')->textInput() ?>

    <?= $form->field($model, 'tgltempo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
