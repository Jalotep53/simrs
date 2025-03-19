<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPermintaanLab $model */

$this->title = 'Update Template Pemeriksaan Dokter Permintaan Lab: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-pemeriksaan-dokter-permintaan-lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
