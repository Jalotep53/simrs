<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AuditKamarJenazah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="audit-kamar-jenazah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'audit1')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit2')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit3')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit4')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit5')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit6')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit7')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'audit8')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
