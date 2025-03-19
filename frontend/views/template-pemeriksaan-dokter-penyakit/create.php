<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPenyakit $model */

$this->title = 'Create Template Pemeriksaan Dokter Penyakit';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Penyakits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-penyakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
