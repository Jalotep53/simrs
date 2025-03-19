<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiaya $model */

$this->title = $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengajuan-biaya-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pengajuan' => $model->no_pengajuan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pengajuan' => $model->no_pengajuan], [
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
            'no_pengajuan',
            'tanggal',
            'nik',
            'urgensi',
            'uraian_latar_belakang',
            'tujuan_pengajuan',
            'target_sasaran',
            'lokasi_kegiatan',
            'jumlah',
            'harga',
            'total',
            'keterangan',
            'nik_pj',
            'status',
        ],
    ]) ?>

</div>
