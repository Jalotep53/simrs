<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterRencanaKeperawatanAnak $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-rencana-keperawatan-anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_masalah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_rencana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rencana_keperawatan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
