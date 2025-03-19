<?php

use frontend\models\SignoutSebelumMenutupLuka;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SignoutSebelumMenutupLukaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Signout Sebelum Menutup Lukas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signout-sebelum-menutup-luka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Signout Sebelum Menutup Luka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'sncn',
            'tindakan',
            'kd_dokter_bedah',
            //'kd_dokter_anestesi',
            //'verbal_tindakan',
            //'verbal_kelengkapan_kasa',
            //'verbal_instrumen',
            //'verbal_alat_tajam',
            //'kelengkapan_specimen_label',
            //'kelengkapan_specimen_formulir',
            //'peninjauan_kegiatan_dokter_bedah',
            //'peninjauan_kegiatan_dokter_anestesi',
            //'peninjauan_kegiatan_perawat_kamar_ok',
            //'perhatian_utama_fase_pemulihan',
            //'nip_perawat_ok',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SignoutSebelumMenutupLuka $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
