<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianFisioterapi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Fisioterapis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penilaian-fisioterapi-view">

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
            'keluhan_utama',
            'rps',
            'rpd',
            'td',
            'hr',
            'rr',
            'suhu',
            'nyeri_tekan',
            'nyeri_gerak',
            'nyeri_diam',
            'palpasi',
            'luas_gerak_sendi',
            'kekuatan_otot',
            'statis',
            'dinamis',
            'kognitif',
            'auskultasi',
            'alat_bantu',
            'ket_bantu',
            'prothesa',
            'ket_pro',
            'deformitas',
            'ket_deformitas',
            'resikojatuh',
            'ket_resikojatuh',
            'adl',
            'lainlain_fungsional',
            'ket_fisik:ntext',
            'pemeriksaan_musculoskeletal',
            'pemeriksaan_neuromuscular',
            'pemeriksaan_cardiopulmonal',
            'pemeriksaan_integument',
            'pengukuran_musculoskeletal',
            'pengukuran_neuromuscular',
            'pengukuran_cardiopulmonal',
            'pengukuran_integument',
            'penunjang',
            'diagnosis_fisio',
            'rencana_terapi',
            'nip',
        ],
    ]) ?>

</div>
