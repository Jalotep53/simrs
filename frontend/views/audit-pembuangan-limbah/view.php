<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AuditPembuanganLimbah $model */

$this->title = $model->tanggal;
$this->params['breadcrumbs'][] = ['label' => 'Audit Pembuangan Limbahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="audit-pembuangan-limbah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tanggal' => $model->tanggal, 'id_ruang' => $model->id_ruang], [
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
            'id_ruang',
            'pemisahan_limbah_oleh_penghasil_limbah',
            'limbah_infeksius_dimasukkan_kantong_kuning',
            'limbah_noninfeksius_dimasukkan_kantong_hitam',
            'limbah_tigaperempat_diikat',
            'limbah_segera_dibawa_kepembuangan_sementara',
            'kotak_sampah_dalam_kondisi_bersih',
            'pembersihan_tempat_sampah_dengan_desinfekten',
            'pembersihan_penampungan_sementara_dengan_desinfekten',
        ],
    ]) ?>

</div>
