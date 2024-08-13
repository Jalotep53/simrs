<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Setting $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_instansi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propinsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aktifkan')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_ppk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_ppkinhealth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_ppkkemenkes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wallpaper')->textInput() ?>

    <?= $form->field($model, 'logo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
