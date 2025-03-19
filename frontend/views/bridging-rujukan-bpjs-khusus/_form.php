<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\BridgingRujukanBpjsKhusus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bridging-rujukan-bpjs-khusus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rujukan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nokapst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nmpst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tglrujukan_awal')->textInput() ?>

    <?= $form->field($model, 'tglrujukan_berakhir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
