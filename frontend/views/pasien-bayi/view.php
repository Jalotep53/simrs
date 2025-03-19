<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\PasienBayi $model */

$this->title = $model->no_rkm_medis;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Bayis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-bayi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'no_rkm_medis' => $model->no_rkm_medis], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'no_rkm_medis' => $model->no_rkm_medis], [
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
            'no_rkm_medis',
            'umur_ibu',
            'nama_ayah',
            'umur_ayah',
            'berat_badan',
            'panjang_badan',
            'lingkar_kepala',
            'proses_lahir',
            'anakke',
            'jam_lahir',
            'keterangan',
            'diagnosa',
            'penyulit_kehamilan',
            'ketuban',
            'lingkar_perut',
            'lingkar_dada',
            'penolong',
            'no_skl',
            'g',
            'p',
            'a',
            'f1',
            'u1',
            't1',
            'r1',
            'w1',
            'n1',
            'f5',
            'u5',
            't5',
            'r5',
            'w5',
            'n5',
            'f10',
            'u10',
            't10',
            'r10',
            'w10',
            'n10',
            'resusitas',
            'obat_diberikan',
            'mikasi',
            'mikonium',
        ],
    ]) ?>

</div>
