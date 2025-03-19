<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PcareObatDiberikan $model */

$this->title = 'Update Pcare Obat Diberikan: ' . $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Pcare Obat Diberikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_rawat, 'url' => ['view', 'no_rawat' => $model->no_rawat, 'noKunjungan' => $model->noKunjungan, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pcare-obat-diberikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
