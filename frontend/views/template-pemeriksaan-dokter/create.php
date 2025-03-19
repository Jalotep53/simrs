<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokter $model */

$this->title = 'Create Template Pemeriksaan Dokter';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
