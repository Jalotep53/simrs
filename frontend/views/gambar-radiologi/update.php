<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\GambarRadiologi $model */

$this->title = 'Update Gambar Radiologi: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Gambar Radiologis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam, 'lokasi_gambar' => $model->lokasi_gambar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gambar-radiologi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
