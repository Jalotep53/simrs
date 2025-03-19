<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterProsedur $model */

$this->title = 'Create Template Pemeriksaan Dokter Prosedur';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Prosedurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-prosedur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
