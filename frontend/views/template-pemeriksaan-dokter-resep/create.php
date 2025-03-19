<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterResep $model */

$this->title = 'Create Template Pemeriksaan Dokter Resep';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-resep-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
