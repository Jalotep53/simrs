<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePersetujuanPenolakanTindakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-persetujuan-penolakan-tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kode_template') ?>

    <?= $form->field($model, 'diagnosa') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?= $form->field($model, 'indikasi_tindakan') ?>

    <?= $form->field($model, 'tata_cara') ?>

    <?php // echo $form->field($model, 'tujuan') ?>

    <?php // echo $form->field($model, 'risiko') ?>

    <?php // echo $form->field($model, 'komplikasi') ?>

    <?php // echo $form->field($model, 'prognosis') ?>

    <?php // echo $form->field($model, 'alternatif_dan_risikonya') ?>

    <?php // echo $form->field($model, 'lain_lain') ?>

    <?php // echo $form->field($model, 'biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
