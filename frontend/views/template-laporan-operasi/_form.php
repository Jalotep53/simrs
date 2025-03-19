<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplateLaporanOperasi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-laporan-operasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_operasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_preop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa_postop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jaringan_dieksisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'permintaan_pa')->dropDownList([ 'Ya' => 'Ya', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'laporan_operasi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
