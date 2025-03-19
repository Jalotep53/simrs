<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiri $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-pulang-atas-permintaan-sendiri-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_pulang')->textInput() ?>

    <?= $form->field($model, 'rs_pilihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lahir')->textInput() ?>

    <?= $form->field($model, 'umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jkpj')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan')->dropDownList([ 'Suami' => 'Suami', 'Istri' => 'Istri', 'Anak' => 'Anak', 'Ayah' => 'Ayah', 'Ibu' => 'Ibu', 'Saudara' => 'Saudara', 'Keponakan' => 'Keponakan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'saksi_keluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
