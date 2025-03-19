<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SuratHamil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="surat-hamil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggalperiksa')->textInput() ?>

    <?= $form->field($model, 'hasilperiksa')->dropDownList([ 'tidak ditemukan tanda-tanda kehamilan' => 'Tidak ditemukan tanda-tanda kehamilan', 'ditemukan tanda-tanda kehamilan' => 'Ditemukan tanda-tanda kehamilan', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
