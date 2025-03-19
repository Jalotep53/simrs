<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AngsuranKoperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="angsuran-koperasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'tanggal_pinjam')->textInput() ?>

    <?= $form->field($model, 'tanggal_angsur')->textInput() ?>

    <?= $form->field($model, 'pokok')->textInput() ?>

    <?= $form->field($model, 'jasa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
