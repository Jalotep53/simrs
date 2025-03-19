<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisBarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inventaris-barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jml_barang')->textInput() ?>

    <?= $form->field($model, 'kode_produsen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_merk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thn_produksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
