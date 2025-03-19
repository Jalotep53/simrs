<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\ResumePasienRanap $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Resume Pasien Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resume-pasien-ranap-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rawat' => $model->no_rawat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rawat' => $model->no_rawat], [
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
            'kd_dokter',
            'diagnosa_awal',
            'alasan',
            'keluhan_utama:ntext',
            'pemeriksaan_fisik:ntext',
            'jalannya_penyakit:ntext',
            'pemeriksaan_penunjang:ntext',
            'hasil_laborat:ntext',
            'tindakan_dan_operasi:ntext',
            'obat_di_rs:ntext',
            'diagnosa_utama',
            'kd_diagnosa_utama',
            'diagnosa_sekunder',
            'kd_diagnosa_sekunder',
            'diagnosa_sekunder2',
            'kd_diagnosa_sekunder2',
            'diagnosa_sekunder3',
            'kd_diagnosa_sekunder3',
            'diagnosa_sekunder4',
            'kd_diagnosa_sekunder4',
            'prosedur_utama',
            'kd_prosedur_utama',
            'prosedur_sekunder',
            'kd_prosedur_sekunder',
            'prosedur_sekunder2',
            'kd_prosedur_sekunder2',
            'prosedur_sekunder3',
            'kd_prosedur_sekunder3',
            'alergi',
            'diet:ntext',
            'lab_belum:ntext',
            'edukasi:ntext',
            'cara_keluar',
            'ket_keluar',
            'keadaan',
            'ket_keadaan',
            'dilanjutkan',
            'ket_dilanjutkan',
            'kontrol',
            'obat_pulang:ntext',
        ],
    ]) ?>

</div>
