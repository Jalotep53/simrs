<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\HasilPemeriksaanUsg $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Hasil Pemeriksaan Usgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hasil-pemeriksaan-usg-view">

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
            'kd_dokter',
            'diagnosa_klinis',
            'kiriman_dari',
            'hta',
            'kantong_gestasi',
            'ukuran_bokongkepala',
            'jenis_prestasi',
            'diameter_biparietal',
            'panjang_femur',
            'lingkar_abdomen',
            'tafsiran_berat_janin',
            'usia_kehamilan',
            'plasenta_berimplatansi',
            'derajat_maturitas',
            'jumlah_air_ketuban',
            'indek_cairan_ketuban',
            'kelainan_kongenital',
            'peluang_sex',
            'kesimpulan',
        ],
    ]) ?>

</div>
