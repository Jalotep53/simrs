<?php

use frontend\models\PenilaianPreAnestesi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPreAnestesiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Pre Anestesis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pre-anestesi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Pre Anestesi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'tanggal_operasi',
            'diagnosa',
            //'rencana_tindakan',
            //'tb',
            //'bb',
            //'td',
            //'io2',
            //'nadi',
            //'pernapasan',
            //'suhu',
            //'fisik_cardiovasculer',
            //'fisik_paru',
            //'fisik_abdomen',
            //'fisik_extrimitas',
            //'fisik_endokrin',
            //'fisik_ginjal',
            //'fisik_obatobatan',
            //'fisik_laborat',
            //'fisik_penunjang',
            //'riwayat_penyakit_alergiobat',
            //'riwayat_penyakit_alergilainnya',
            //'riwayat_penyakit_terapi',
            //'riwayat_kebiasaan_merokok',
            //'riwayat_kebiasaan_ket_merokok',
            //'riwayat_kebiasaan_alkohol',
            //'riwayat_kebiasaan_ket_alkohol',
            //'riwayat_kebiasaan_obat',
            //'riwayat_kebiasaan_ket_obat',
            //'riwayat_medis_cardiovasculer',
            //'riwayat_medis_respiratory',
            //'riwayat_medis_endocrine',
            //'riwayat_medis_lainnya',
            //'asa',
            //'puasa',
            //'rencana_anestesi',
            //'rencana_perawatan',
            //'catatan_khusus',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianPreAnestesi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
