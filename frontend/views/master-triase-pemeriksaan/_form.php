<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriasePemeriksaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-triase-pemeriksaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemeriksaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
