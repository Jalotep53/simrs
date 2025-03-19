<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPenyakit $model */

$this->title = 'Update Template Pemeriksaan Dokter Penyakit: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template, 'kd_penyakit' => $model->kd_penyakit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-pemeriksaan-dokter-penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
