<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Inventaris $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_inventaris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal_barang')->dropDownList([ 'Beli' => 'Beli', 'Bantuan' => 'Bantuan', 'Hibah' => 'Hibah', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_pengadaan')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'status_barang')->dropDownList([ 'Ada' => 'Ada', 'Rusak' => 'Rusak', 'Hilang' => 'Hilang', 'Perbaikan' => 'Perbaikan', 'Dipinjam' => 'Dipinjam', '-' => '-', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_box')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
