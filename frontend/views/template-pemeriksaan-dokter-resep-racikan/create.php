<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterResepRacikan $model */

$this->title = 'Create Template Pemeriksaan Dokter Resep Racikan';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Resep Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-resep-racikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
