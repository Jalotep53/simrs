<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="utd-pengambilan-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml')->textInput() ?>

    <?= $form->field($model, 'hargabeli')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'kd_bangsal_dr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
