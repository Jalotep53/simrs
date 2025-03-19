<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Peminjampiutang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="peminjampiutang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_peminjam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_rek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
