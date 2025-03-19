<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMenolakAnjuranMedis $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-menolak-anjuran-medis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_penolakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_penolakan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
