<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianRisikoDekubitus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penilaian-risiko-dekubitus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kondisi_fisik')->dropDownList([ 'Baik' => 'Baik', 'Sedang' => 'Sedang', 'Buruk' => 'Buruk', 'Sangat Buruk' => 'Sangat Buruk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kondisi_fisik_nilai')->textInput() ?>

    <?= $form->field($model, 'status_mental')->dropDownList([ 'Sadar' => 'Sadar', 'Apatis' => 'Apatis', 'Bingung' => 'Bingung', 'Stupor' => 'Stupor', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_mental_nilai')->textInput() ?>

    <?= $form->field($model, 'aktifitas')->dropDownList([ 'Jalan Sendiri' => 'Jalan Sendiri', 'Jalan Dengan Bantuan' => 'Jalan Dengan Bantuan', 'Kursi Roda' => 'Kursi Roda', 'Di Tempat Tidur' => 'Di Tempat Tidur', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aktifitas_nilai')->textInput() ?>

    <?= $form->field($model, 'mobilitas')->dropDownList([ 'Bebas Bergerak' => 'Bebas Bergerak', 'Agar Terbatas' => 'Agar Terbatas', 'Sangat Terbatas' => 'Sangat Terbatas', 'Tidak Mampu Bergerak' => 'Tidak Mampu Bergerak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobilitas_nilai')->textInput() ?>

    <?= $form->field($model, 'inkontinensia')->dropDownList([ 'Kontinen' => 'Kontinen', 'Kadang-kadang Inkontinensia Urine' => 'Kadang-kadang Inkontinensia Urine', 'Selalu Inkontenesia Urine' => 'Selalu Inkontenesia Urine', 'Inkontinensia Alvi Dan Urine' => 'Inkontinensia Alvi Dan Urine', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'inkontinensia_nilai')->textInput() ?>

    <?= $form->field($model, 'totalnilai')->textInput() ?>

    <?= $form->field($model, 'kategorinilai')->dropDownList([ 'Risiko Rendah' => 'Risiko Rendah', 'Risiko Sedang' => 'Risiko Sedang', 'Risiko Tinggi' => 'Risiko Tinggi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
