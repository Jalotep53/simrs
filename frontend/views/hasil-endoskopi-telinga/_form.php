<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilEndoskopiTelinga $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-endoskopi-telinga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bentuk_liang_telinga_kanan')->dropDownList([ 'Lapang' => 'Lapang', 'Sempit' => 'Sempit', 'Destruksi' => 'Destruksi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bentuk_liang_telinga_kiri')->dropDownList([ 'Lapang' => 'Lapang', 'Sempit' => 'Sempit', 'Destruksi' => 'Destruksi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi_liang_telinga_kanan')->dropDownList([ 'Serumen' => 'Serumen', 'Sekret' => 'Sekret', 'Jamur' => 'Jamur', 'Kolesteatoma' => 'Kolesteatoma', 'Massa/Jaringan' => 'Massa/Jaringan', 'Benda Asing' => 'Benda Asing', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kondisi_liang_telinga_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kondisi_liang_telinga_kiri')->dropDownList([ 'Serumen' => 'Serumen', 'Sekret' => 'Sekret', 'Jamur' => 'Jamur', 'Kolesteatoma' => 'Kolesteatoma', 'Massa/Jaringan' => 'Massa/Jaringan', 'Benda Asing' => 'Benda Asing', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_kondisi_liang_telinga_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membran_timpani_intak_kanan')->dropDownList([ 'Normal' => 'Normal', 'Hiperemis' => 'Hiperemis', 'Bulging' => 'Bulging', 'Retraksi' => 'Retraksi', 'Sklerotik' => 'Sklerotik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'membran_timpani_intak_kiri')->dropDownList([ 'Normal' => 'Normal', 'Hiperemis' => 'Hiperemis', 'Bulging' => 'Bulging', 'Retraksi' => 'Retraksi', 'Sklerotik' => 'Sklerotik', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'membran_timpani_perforasi_kanan')->dropDownList([ 'Sentral' => 'Sentral', 'Atik' => 'Atik', 'Marginal' => 'Marginal', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_membran_timpani_perforasi_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membran_timpani_perforasi_kiri')->dropDownList([ 'Sentral' => 'Sentral', 'Atik' => 'Atik', 'Marginal' => 'Marginal', 'Lainnya' => 'Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_membran_timpani_perforasi_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_mukosa_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_mukosa_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_osikel_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_osikel_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_isthmus_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_isthmus_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_anterior_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_anterior_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_posterior_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kavum_timpani_posterior_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainlain_kanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lainlain_kiri')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anjuran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
