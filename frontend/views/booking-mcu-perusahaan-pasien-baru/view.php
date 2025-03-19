<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\BookingMcuPerusahaanPasienBaru $model */

$this->title = $model->no_pengajuan;
$this->params['breadcrumbs'][] = ['label' => 'Booking Mcu Perusahaan Pasien Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-mcu-perusahaan-pasien-baru-view">

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
            'nm_pasien',
            'no_ktp',
            'jk',
            'tmp_lahir',
            'tgl_lahir',
            'nm_ibu',
            'alamat',
            'kelurahan',
            'kecamatan',
            'kabupaten',
            'propinsi',
            'gol_darah',
            'pekerjaan',
            'stts_nikah',
            'agama',
            'tgl_mcu',
            'no_tlp',
            'umur',
            'pnd',
            'keluarga',
            'namakeluarga',
            'pekerjaanpj',
            'alamatpj',
            'kelurahanpj',
            'kecamatanpj',
            'kabupatenpj',
            'propinsipj',
            'perusahaan_pasien',
            'suku_bangsa',
            'bahasa_pasien',
            'cacat_fisik',
            'email:email',
            'nip',
            'status',
        ],
    ]) ?>

</div>
