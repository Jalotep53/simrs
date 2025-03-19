<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InhealthJenpelRuangRawat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="inhealth-jenpel-ruang-rawat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_jenpel_ruang_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_jenpel_ruang_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarif')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
