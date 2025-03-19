<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RujukanranapDokterRs $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Rujukanranap Dokter Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rujukanranap-dokter-rs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'kd_dokter' => $model->kd_dokter, 'no_rkm_medis' => $model->no_rkm_medis, 'kd_kamar' => $model->kd_kamar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tanggal',
            'kd_dokter',
            'no_rkm_medis',
            'kd_kamar',
            'jasarujuk',
        ],
    ]) ?>

</div>
