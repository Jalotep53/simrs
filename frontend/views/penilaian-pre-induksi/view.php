<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreInduksi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pre Induksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-pre-induksi-view">

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
            'kd_dokter',
            'tensi',
            'nadi',
            'rr',
            'suhu',
            'ekg',
            'lain_lain',
            'asesmen',
            'perencanaan',
            'infus_perifier',
            'cvc',
            'posisi',
            'premedikasi',
            'premedikasi_keterangan',
            'induksi',
            'induksi_keterangan',
            'face_mask_no',
            'nasopharing_no',
            'ett_no',
            'ett_jenis',
            'ett_viksasi',
            'lma_no',
            'lma_jenis',
            'tracheostomi',
            'bronchoscopi_fiberoptik',
            'glidescopi',
            'lain_lain_tatalaksana',
            'intubasi_sesudah_tidur',
            'intubasi_oral',
            'intubasi_tracheostomi',
            'intubasi_keterangan',
            'sulit_ventilasi',
            'sulit_intubasi',
            'ventilasi',
            'teknik_regional_jenis',
            'teknik_regional_lokasi',
            'teknik_regional_jenis_jarum',
            'teknik_regional_kateter',
            'teknik_regional_kateter_viksasi',
            'teknik_regional_obat_obatan',
            'teknik_regional_komplikasi',
            'teknik_regional_hasil',
        ],
    ]) ?>

</div>
