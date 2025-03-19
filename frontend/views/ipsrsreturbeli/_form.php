<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Ipsrsreturbeli $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ipsrsreturbeli-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_retur_beli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_retur')->textInput() ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_suplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
