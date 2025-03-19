<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\DeteksiDiniCorona $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Deteksi Dini Coronas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deteksi-dini-corona-view">

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
            'nip',
            'gejala_demam',
            'gejala_batuk',
            'gejala_sesak',
            'gejala_tanggal_pertama',
            'gejala_riwayat_sakit',
            'gejala_riwayat_periksa',
            'faktor_riwayat_perjalanan',
            'faktor_asal_daerah',
            'faktor_tanggal_kedatangan',
            'faktor_paparan_kontakpositif',
            'faktor_paparan_kontakpdp',
            'faktor_paparan_faskespositif',
            'faktor_paparan_perjalananln',
            'faktor_paparan_pasarhewan',
            'kesimpulan',
            'tindak_lanjut',
        ],
    ]) ?>

</div>
