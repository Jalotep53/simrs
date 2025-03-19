<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\PenjabDokumenKerjasama $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penjab-dokumen-kerjasama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_pj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kerjasama_berakhir')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
