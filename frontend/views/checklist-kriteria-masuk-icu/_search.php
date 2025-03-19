<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ChecklistKriteriaMasukIcuSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="checklist-kriteria-masuk-icu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_rawat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'prioritas1_1') ?>

    <?= $form->field($model, 'prioritas1_2') ?>

    <?= $form->field($model, 'prioritas1_3') ?>

    <?php // echo $form->field($model, 'prioritas1_4') ?>

    <?php // echo $form->field($model, 'prioritas1_5') ?>

    <?php // echo $form->field($model, 'prioritas1_6') ?>

    <?php // echo $form->field($model, 'prioritas2_1') ?>

    <?php // echo $form->field($model, 'prioritas2_2') ?>

    <?php // echo $form->field($model, 'prioritas2_3') ?>

    <?php // echo $form->field($model, 'prioritas2_4') ?>

    <?php // echo $form->field($model, 'prioritas2_5') ?>

    <?php // echo $form->field($model, 'prioritas2_6') ?>

    <?php // echo $form->field($model, 'prioritas2_7') ?>

    <?php // echo $form->field($model, 'prioritas2_8') ?>

    <?php // echo $form->field($model, 'prioritas3_1') ?>

    <?php // echo $form->field($model, 'prioritas3_2') ?>

    <?php // echo $form->field($model, 'prioritas3_3') ?>

    <?php // echo $form->field($model, 'prioritas3_4') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_tanda_vital_1') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_tanda_vital_2') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_tanda_vital_3') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_tanda_vital_4') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_tanda_vital_5') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_1') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_2') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_3') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_4') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_5') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_laborat_6') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_radiologi_1') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_radiologi_2') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_1') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_2') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_3') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_4') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_5') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_6') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_7') ?>

    <?php // echo $form->field($model, 'kriteria_fisiologis_klinis_8') ?>

    <?php // echo $form->field($model, 'nik') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
