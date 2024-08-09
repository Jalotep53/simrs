<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Databarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="databarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_satbesar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'letak_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dasar')->textInput() ?>

    <?= $form->field($model, 'h_beli')->textInput() ?>

    <?= $form->field($model, 'ralan')->textInput() ?>

    <?= $form->field($model, 'kelas1')->textInput() ?>

    <?= $form->field($model, 'kelas2')->textInput() ?>

    <?= $form->field($model, 'kelas3')->textInput() ?>

    <?= $form->field($model, 'utama')->textInput() ?>

    <?= $form->field($model, 'vip')->textInput() ?>

    <?= $form->field($model, 'vvip')->textInput() ?>

    <?= $form->field($model, 'beliluar')->textInput() ?>

    <?= $form->field($model, 'jualbebas')->textInput() ?>

    <?= $form->field($model, 'karyawan')->textInput() ?>

    <?= $form->field($model, 'stokminimal')->textInput() ?>

    <?= $form->field($model, 'kdjns')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textInput() ?>

    <?= $form->field($model, 'kapasitas')->textInput() ?>

    <?= $form->field($model, 'expire')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_industri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_golongan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
