<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreAnestesi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pre Anestesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-pre-anestesi-view">

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
            'tanggal_operasi',
            'diagnosa',
            'rencana_tindakan',
            'tb',
            'bb',
            'td',
            'io2',
            'nadi',
            'pernapasan',
            'suhu',
            'fisik_cardiovasculer',
            'fisik_paru',
            'fisik_abdomen',
            'fisik_extrimitas',
            'fisik_endokrin',
            'fisik_ginjal',
            'fisik_obatobatan',
            'fisik_laborat',
            'fisik_penunjang',
            'riwayat_penyakit_alergiobat',
            'riwayat_penyakit_alergilainnya',
            'riwayat_penyakit_terapi',
            'riwayat_kebiasaan_merokok',
            'riwayat_kebiasaan_ket_merokok',
            'riwayat_kebiasaan_alkohol',
            'riwayat_kebiasaan_ket_alkohol',
            'riwayat_kebiasaan_obat',
            'riwayat_kebiasaan_ket_obat',
            'riwayat_medis_cardiovasculer',
            'riwayat_medis_respiratory',
            'riwayat_medis_endocrine',
            'riwayat_medis_lainnya',
            'asa',
            'puasa',
            'rencana_anestesi',
            'rencana_perawatan',
            'catatan_khusus',
        ],
    ]) ?>

</div>
