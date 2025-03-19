<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabpaGambar $model */

$this->title = 'Update Detail Periksa Labpa Gambar: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Detail Periksa Labpa Gambars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-periksa-labpa-gambar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
