<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\DataBatch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="data-batch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_batch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_brng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_beli')->textInput() ?>

    <?= $form->field($model, 'tgl_kadaluarsa')->textInput() ?>

    <?= $form->field($model, 'asal')->dropDownList([ 'Penerimaan' => 'Penerimaan', 'Pengadaan' => 'Pengadaan', 'Hibah' => 'Hibah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_faktur')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'jumlahbeli')->textInput() ?>

    <?= $form->field($model, 'sisa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
