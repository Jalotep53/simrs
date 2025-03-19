<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PersetujuanPenolakanTindakan $model */

$this->title = $model->no_pernyataan;
$this->params['breadcrumbs'][] = ['label' => 'Persetujuan Penolakan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="persetujuan-penolakan-tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_pernyataan' => $model->no_pernyataan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_pernyataan' => $model->no_pernyataan], [
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
            'no_pernyataan',
            'no_rawat',
            'tanggal',
            'diagnosa',
            'diagnosa_konfirmasi',
            'tindakan',
            'tindakan_konfirmasi',
            'indikasi_tindakan',
            'indikasi_tindakan_konfirmasi',
            'tata_cara',
            'tata_cara_konfirmasi',
            'tujuan',
            'tujuan_konfirmasi',
            'risiko',
            'risiko_konfirmasi',
            'komplikasi',
            'komplikasi_konfirmasi',
            'prognosis',
            'prognosis_konfirmasi',
            'alternatif_dan_risikonya',
            'alternatif_konfirmasi',
            'biaya',
            'biaya_konfirmasi',
            'lain_lain',
            'lain_lain_konfirmasi',
            'kd_dokter',
            'nip',
            'penerima_informasi',
            'alasan_diwakilkan_penerima_informasi',
            'jk_penerima_informasi',
            'tanggal_lahir_penerima_informasi',
            'umur_penerima_informasi',
            'alamat_penerima_informasi',
            'no_hp',
            'hubungan_penerima_informasi',
            'pernyataan',
            'saksi_keluarga',
        ],
    ]) ?>

</div>
