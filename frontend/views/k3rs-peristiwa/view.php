<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\K3rsPeristiwa $model */

$this->title = $model->no_k3rs;
$this->params['breadcrumbs'][] = ['label' => 'K3rs Peristiwas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="k3rs-peristiwa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_k3rs' => $model->no_k3rs], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_k3rs' => $model->no_k3rs], [
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
            'no_k3rs',
            'tgl_insiden',
            'waktu_insiden',
            'kode_pekerjaan',
            'tgl_pelaporan',
            'waktu_pelaporan',
            'kode_lokasi',
            'kronologi_kejadian',
            'kode_penyebab',
            'nik',
            'kategori_cidera',
            'kode_cidera',
            'kode_luka',
            'kode_bagian',
            'lt',
            'penyebab_langsung_kondisi',
            'penyebab_langsung_tindakan',
            'penyebab_tidak_langsung_pribadi',
            'penyebab_tidak_langsung_pekerjaan',
            'barang_bukti',
            'kode_dampak',
            'nik_pelapor',
            'perbaikan_jenis_tindakan',
            'perbaikan_rencana_tindakan',
            'perbaikan_target',
            'perbaikan_wewenang',
            'nik_timk3',
            'catatan',
        ],
    ]) ?>

</div>
