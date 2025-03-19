<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningNutrisiAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skrining-nutrisi-anak-form">

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

    <?= $form->field($model, 'sg1')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai1')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg2')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai2')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg3')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai3')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sg4')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nilai4')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'total_hasil')->textInput() ?>

    <?= $form->field($model, 'skor_nutrisi')->dropDownList([ 'Risikio Berat' => 'Risikio Berat', 'Risiko Sedang' => 'Risiko Sedang', 'Risiko Rendah' => 'Risiko Rendah', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'diketahui_dietisien')->dropDownList([ 'Tidak' => 'Tidak', 'Ya' => 'Ya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan_diketahui_dietisien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
