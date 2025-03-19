<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TemplatePemeriksaanDokterPermintaanLab $model */

$this->title = 'Create Template Pemeriksaan Dokter Permintaan Lab';
$this->params['breadcrumbs'][] = ['label' => 'Template Pemeriksaan Dokter Permintaan Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-pemeriksaan-dokter-permintaan-lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
