<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienCorona $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-corona-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'no_pengenal',
            'no_rkm_medis',
            'inisial',
            'nama_lengkap',
            'tgl_masuk',
            'kode_jk',
            'nama_jk',
            'tgl_lahir',
            'kode_kewarganegaraan',
            'nama_kewarganegaraan',
            'kode_penularan',
            'sumber_penularan',
            'kd_kelurahan',
            'nm_kelurahan',
            'kd_kecamatan',
            'nm_kecamatan',
            'kd_kabupaten',
            'nm_kabupaten',
            'kd_propinsi',
            'nm_propinsi',
            'tgl_keluar',
            'kode_statuskeluar',
            'nama_statuskeluar',
            'tgl_lapor',
            'kode_statusrawat',
            'nama_statusrawat',
            'kode_statusisolasi',
            'nama_statusisolasi',
            'email:email',
            'notelp',
            'sebab_kematian',
            'kode_jenis_pasien',
            'nama_jenis_pasien',
        ],
    ]) ?>

</div>
