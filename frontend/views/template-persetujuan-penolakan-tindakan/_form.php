<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-persetujuan-penolakan-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_template')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indikasi_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tata_cara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'risiko')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'komplikasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prognosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alternatif_dan_risikonya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lain_lain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
