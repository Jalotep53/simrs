<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenolakanTindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="persetujuan-penolakan-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_pernyataan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'indikasi_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indikasi_tindakan_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tata_cara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tata_cara_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'risiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risiko_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'komplikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komplikasi_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'prognosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prognosis_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alternatif_dan_risikonya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternatif_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'biaya_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lain_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain_lain_konfirmasi')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penerima_informasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_diwakilkan_penerima_informasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk_penerima_informasi')->dropDownList([ 'L' => 'L', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_lahir_penerima_informasi')->textInput() ?>

    <?= $form->field($model, 'umur_penerima_informasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_penerima_informasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan_penerima_informasi')->dropDownList([ 'Diri Sendiri' => 'Diri Sendiri', 'Orang Tua' => 'Orang Tua', 'Anak' => 'Anak', 'Saudara Kandung' => 'Saudara Kandung', 'Teman' => 'Teman', 'Lain-lain' => 'Lain-lain', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pernyataan')->dropDownList([ 'Belum Dikonfirmasi' => 'Belum Dikonfirmasi', 'Persetujuan' => 'Persetujuan', 'Penolakan' => 'Penolakan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'saksi_keluarga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
