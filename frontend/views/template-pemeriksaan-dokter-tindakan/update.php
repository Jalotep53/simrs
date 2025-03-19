<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterTindakan $model */

$this->title = 'Update Template Pemeriksaan Dokter Tindakan: ' . $model->no_template;
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_template, 'url' => ['view', 'no_template' => $model->no_template, 'kd_jenis_prw' => $model->kd_jenis_prw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-pemeriksaan-dokter-tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
