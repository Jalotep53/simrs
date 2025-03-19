<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PemantauanPewsAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pemantauan-pews-anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'parameter_perilaku')->dropDownList([ 'Sadar / Bermain' => 'Sadar / Bermain', 'Tidur / Perubahan Perilaku' => 'Tidur / Perubahan Perilaku', 'Gelisah' => 'Gelisah', 'Tidak Merespon Terhadap Nyeri Penurunan Kesadaran' => 'Tidak Merespon Terhadap Nyeri Penurunan Kesadaran', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_perilaku')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_crt_atau_warna_kulit')->dropDownList([ '1 - 2 dtk / Pink' => '1 - 2 dtk / Pink', '3 dtk / Pucat' => '3 dtk / Pucat', '4 dtk / Sianosis' => '4 dtk / Sianosis', '>=5 dtk / Mottle' => '>=5 dtk / Mottle', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_crt_atau_warna_kulit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_perespirasi')->dropDownList([ 'Tidak Ada Retraksi' => 'Tidak Ada Retraksi', 'Cuping Hidung / O2 1-3 Lpm' => 'Cuping Hidung / O2 1-3 Lpm', 'Retraksi Dada / O2 4-6 Lpm' => 'Retraksi Dada / O2 4-6 Lpm', 'Stridor / O2 7-8 Lpm' => 'Stridor / O2 7-8 Lpm', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'skor_perespirasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skor_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parameter_total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
