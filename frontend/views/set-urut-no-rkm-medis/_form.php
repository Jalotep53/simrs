<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\SetUrutNoRkmMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="set-urut-no-rkm-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'urutan')->dropDownList([ 'Straight' => 'Straight', 'Middle' => 'Middle', 'Terminal' => 'Terminal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bulan')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'posisi_tahun_bulan')->dropDownList([ 'Depan' => 'Depan', 'Belakang' => 'Belakang', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
