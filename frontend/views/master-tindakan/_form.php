<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jm')->textInput() ?>

    <?= $form->field($model, 'jns')->dropDownList([ 'Karyawan' => 'Karyawan', 'dr Umum' => 'Dr Umum', 'dr Spesialis' => 'Dr Spesialis', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
