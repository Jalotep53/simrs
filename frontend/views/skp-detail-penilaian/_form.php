<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SkpDetailPenilaian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="skp-detail-penilaian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor_penilaian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_kriteria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skala_penilaian')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
