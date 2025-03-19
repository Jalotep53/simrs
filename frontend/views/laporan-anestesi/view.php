<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\LaporanAnestesi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="laporan-anestesi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat, 'mulai' => $model->mulai], [
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
            'mulai',
            'selesai',
            'tempat_pemantauan',
            'tindakan_operasi',
            'operator1',
            'asisten_operator',
            'dokter_anestesi',
            'operator2',
            'onloop',
            'penata_anestesi',
            'diagnosa_preop',
            'diagnosa_postop',
            'status_asa',
            'karena',
            'premedikasi',
            'ttv_premedikasi_td',
            'ttv_premedikasi_rr',
            'ttv_premedikasi_hr',
            'ttv_premedikasi_spo2',
            'ttv_premedikasi_ekg',
            'ttv_premedikasi_suhu',
            'ttv_premedikasi_lain',
            'lama_operasi',
            'lama_anastesi',
            'keadaan_umum_bb',
            'keadaan_umum_tb',
            'keadaan_umum_alergi',
            'keadaan_umum_malampathy',
            'keadaan_umum_e',
            'keadaan_umum_v',
            'keadaan_umum_m',
            'jenis_anestesi_lokasi',
            'jenis_anestesi_sedasi',
            'jenis_anestesi_regional',
            'jenis_anestesi_ga_ett',
            'jenis_anestesi_ga_ntt',
            'jenis_anestesi_ga_ema',
            'jenis_anestesi_ga_bm',
            'posisi',
            'perdarahan',
            'urine',
            'komplikasi',
            'ekstubasi',
            'jumlah_pack',
            'dipindahkan_ke',
            'serah_terima_pasien',
            'catatan',
            'nip_recovery_room',
        ],
    ]) ?>

</div>
