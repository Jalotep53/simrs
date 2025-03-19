<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsLokasiKejadian $model */

$this->title = 'Update K3rs Lokasi Kejadian: ' . $model->kode_lokasi;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Lokasi Kejadians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode_lokasi, 'url' => ['view', 'kode_lokasi' => $model->kode_lokasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="k3rs-lokasi-kejadian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
