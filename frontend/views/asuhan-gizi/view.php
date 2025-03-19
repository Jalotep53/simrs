<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\AsuhanGizi $model */

$this->title = $model->no_rawat;
$this->params['breadcrumbs'][] = ['label' => 'Asuhan Gizis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asuhan-gizi-view">

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
            'antropometri_bb',
            'antropometri_tb',
            'antropometri_imt',
            'antropometri_lla',
            'antropometri_tl',
            'antropometri_ulna',
            'antropometri_bbideal',
            'antropometri_bbperu',
            'antropometri_tbperu',
            'antropometri_bbpertb',
            'antropometri_llaperu',
            'biokimia',
            'fisik_klinis',
            'alergi_telur',
            'alergi_susu_sapi',
            'alergi_kacang',
            'alergi_gluten',
            'alergi_udang',
            'alergi_ikan',
            'alergi_hazelnut',
            'pola_makan',
            'riwayat_personal',
            'diagnosis',
            'intervensi_gizi',
            'monitoring_evaluasi',
            'nip',
        ],
    ]) ?>

</div>
