<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterResepRacikan $model */

$this->title = 'Update Template Pemeriksaan Dokter Resep Racikan: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Resep Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template, 'no_racik' => $model->no_racik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-pemeriksaan-dokter-resep-racikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
