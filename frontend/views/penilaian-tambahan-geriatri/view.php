<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatri $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Tambahan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-tambahan-geriatri-view">

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
            'nik',
            'asal_masuk',
            'kondisi_masuk',
            'keterangan_kondisi_masuk',
            'anamnesis',
            'diagnosa_medis',
            'riwayat_immuno_telinga',
            'riwayat_immuno_sinus',
            'riwayat_immuno_antibiotik',
            'riwayat_immuno_pneumonia',
            'riwayat_immuno_abses',
            'riwayat_immuno_sariawan',
            'riwayat_immuno_memerlukan_antibiotik',
            'riwayat_immuno_infeksi_dalam',
            'riwayat_immuno_immunodefisiensi_primer',
            'riwayat_immuno_jenis_kangker',
            'riwayat_immuno_infeksi_oportunistik',
            'pola_aktifitas_tidur',
            'keterangan_pola_aktifitas_tidur',
            'pola_aktifitas_obat_tidur',
            'keterangan_pola_aktifitas_obat_tidur',
            'pola_aktifitas_olahraga',
            'keterangan_pola_aktifitas_olahraga',
            'kualitas_hidup_mobilitas',
            'kualitas_hidup_perawatan_diri',
            'kualitas_hidup_aktifitas_seharihari',
            'kualitas_hidup_rasa_nyeri',
            'skala_nyeri',
        ],
    ]) ?>

</div>
