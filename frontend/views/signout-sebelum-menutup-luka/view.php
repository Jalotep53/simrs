<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\SignoutSebelumMenutupLuka $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Signout Sebelum Menutup Lukas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="signout-sebelum-menutup-luka-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal], [
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
            'no_rawat',
            'tanggal',
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            'kd_dokter_anestesi',
            'verbal_tindakan',
            'verbal_kelengkapan_kasa',
            'verbal_instrumen',
            'verbal_alat_tajam',
            'kelengkapan_specimen_label',
            'kelengkapan_specimen_formulir',
            'peninjauan_kegiatan_dokter_bedah',
            'peninjauan_kegiatan_dokter_anestesi',
            'peninjauan_kegiatan_perawat_kamar_ok',
            'perhatian_utama_fase_pemulihan',
            'nip_perawat_ok',
        ],
    ]) ?>

</div>
