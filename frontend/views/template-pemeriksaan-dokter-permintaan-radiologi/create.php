<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPermintaanRadiologi $model */

$this->title = 'Create Template Pemeriksaan Dokter Permintaan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Permintaan Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-permintaan-radiologi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
