<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiLansia $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-nutrisi-lansia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'td')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suhu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbpb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spo2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alergi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sg1')->dropDownList([ 'Asupan Makan Sangat Berkurang' => 'Asupan Makan Sangat Berkurang', 'Asupan Makan Agak Berkurang' => 'Asupan Makan Agak Berkurang', 'Asupan Makan Tidak Berkurang' => 'Asupan Makan Tidak Berkurang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai1')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg2')->dropDownList([ 'Penurunan Berat Badan Lebih Dari 3 Kg' => 'Penurunan Berat Badan Lebih Dari 3 Kg', 'Tidak Tahu' => 'Tidak Tahu', 'Penurunan Berat Badan Antara 1 Hingga 3 Kg' => 'Penurunan Berat Badan Antara 1 Hingga 3 Kg', 'Tidak Ada Penurunan Berat Badan' => 'Tidak Ada Penurunan Berat Badan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai2')->dropDownList([ '0', '1', '2', '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg3')->dropDownList([ 'Terbatas Dari Tempat Tidur Atau Kursi' => 'Terbatas Dari Tempat Tidur Atau Kursi', 'Mampu Bangun Dari Tempat Tidur/Kursi Tetapi Tidak Bepergian Keluar Rumah' => 'Mampu Bangun Dari Tempat Tidur/Kursi Tetapi Tidak Bepergian Keluar Rumah', 'Dapat Bepergian Keluar Rumah' => 'Dapat Bepergian Keluar Rumah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai3')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg4')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai4')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg5')->dropDownList([ 'Depresi Berat Atau Kepikunan Berat' => 'Depresi Berat Atau Kepikunan Berat', 'Kepikunan Ringan' => 'Kepikunan Ringan', 'Tidak Ada Gangguan Psikologis' => 'Tidak Ada Gangguan Psikologis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai5')->dropDownList([ '0', '1', '2', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg6')->dropDownList([ 'IMT < 19' => 'IMT < 19', '19 Hingga < 21' => '19 Hingga < 21', '21 Hingga < 23' => '21 Hingga < 23', 'IMT >= 23' => 'IMT >= 23', 'Lingkar Betis < 31' => 'Lingkar Betis < 31', 'Lingkar Betis >= 31' => 'Lingkar Betis >= 31', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai6')->dropDownList([ '0', '1', '2', '3', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'total_hasil')->textInput() ?>

    <?= $form->field($model, 'skor_nutrisi')->dropDownList([ 'Status Gizi Normal' => 'Status Gizi Normal', 'Beresiko Malnutrisi' => 'Beresiko Malnutrisi', 'Malnutrisi' => 'Malnutrisi', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
