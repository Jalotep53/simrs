<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BerkasDigitalPerawatan $model */

$this->title = 'Update Berkas Digital Perawatan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Berkas Digital Perawatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'lokasi_file' => $model->lokasi_file]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="berkas-digital-perawatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
