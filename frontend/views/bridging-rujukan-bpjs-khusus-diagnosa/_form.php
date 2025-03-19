<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhususDiagnosa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-khusus-diagnosa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'P' => 'P', 'S' => 'S', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_diagnosa')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
