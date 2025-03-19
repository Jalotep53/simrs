<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsopname $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ipsrsopname-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'h_beli')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'real')->textInput() ?>

    <?= $form->field($model, 'selisih')->textInput() ?>

    <?= $form->field($model, 'nomihilang')->textInput() ?>

    <?= $form->field($model, 'lebih')->textInput() ?>

    <?= $form->field($model, 'nomilebih')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
