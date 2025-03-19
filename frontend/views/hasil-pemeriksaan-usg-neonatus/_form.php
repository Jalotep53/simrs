<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsgNeonatus $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="hasil-pemeriksaan-usg-neonatus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_klinis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kiriman_dari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ventrikal_sinistra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ventrikal_dextra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesimpulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
