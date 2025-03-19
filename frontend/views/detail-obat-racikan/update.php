<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikan $model */

$this->title = 'Update Detail Obat Racikan: ' . $model->tgl_perawatan;
$this->params['breadcrumbs'][] = ['label' => 'Detail Obat Racikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tgl_perawatan, 'url' => ['view', 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-obat-racikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
