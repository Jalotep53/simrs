<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianKorbanKekerasan $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Korban Kekerasans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-korban-kekerasan-view">

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
            'tanggal',
            'informasi',
            'hubungan_dengan_pasien',
            'jumlah_saudara',
            'kondisi_keluaga',
            'hubungan_orang_terdekat',
            'kekerasan_yang_dialami',
            'tempat_kejadian',
            'lama_kekerasan',
            'periode_kekerasan',
            'seberapa_sering_mengalami',
            'pemicu_kekerasan',
            'yang_melakukan_kekerasan',
            'dampak_kekerasan',
            'tanda_tanda_didapatkan',
            'memerlukan_pendampingan',
            'riwayat_kelainan',
            'pemeriksaan_kepala',
            'pemeriksaan_thoraks',
            'pemeriksaan_leher',
            'pemeriksaan_abdomen',
            'pemeriksaan_genitalia',
            'pemeriksaan_ekstrimitas_atas',
            'pemeriksaan_ekstrimitas_bawah',
            'pemeriksaan_anus',
            'nip',
        ],
    ]) ?>

</div>
