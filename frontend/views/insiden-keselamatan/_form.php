<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InsidenKeselamatan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="insiden-keselamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_insiden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_insiden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_insiden')->dropDownList([ 'KTC' => 'KTC', 'KNC' => 'KNC', 'KTD' => 'KTD', 'Sentinel' => 'Sentinel', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'dampak')->dropDownList([ '1. Tidak Signifikan' => '1. Tidak Signifikan', '2. Minor' => '2. Minor', '3. Moderat' => '3. Moderat', '4. Mayor' => '4. Mayor', '5. Katastropik' => '5. Katastropik', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
