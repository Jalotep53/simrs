<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMasalahKeperawatanIgd $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-masalah-keperawatan-igd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_masalah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_masalah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
