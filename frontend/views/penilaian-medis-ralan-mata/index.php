<?php

use frontend\models\PenilaianMedisRalanMata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianMedisRalanMataSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penilaian Medis Ralan Matas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-medis-ralan-mata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penilaian Medis Ralan Mata', ['create'], ['class' => 'btn btn-success']) ?>
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
            'anamnesis',
            'hubungan',
            //'keluhan_utama',
            //'rps',
            //'rpd',
            //'rpo',
            //'alergi',
            //'status',
            //'td',
            //'nadi',
            //'rr',
            //'suhu',
            //'nyeri',
            //'bb',
            //'visuskanan',
            //'visuskiri',
            //'cckanan',
            //'cckiri',
            //'palkanan',
            //'palkiri',
            //'conkanan',
            //'conkiri',
            //'corneakanan',
            //'corneakiri',
            //'coakanan',
            //'coakiri',
            //'pupilkanan',
            //'pupilkiri',
            //'lensakanan',
            //'lensakiri',
            //'funduskanan',
            //'funduskiri',
            //'papilkanan',
            //'papilkiri',
            //'retinakanan',
            //'retinakiri',
            //'makulakanan',
            //'makulakiri',
            //'tiokanan',
            //'tiokiri',
            //'mbokanan',
            //'mbokiri',
            //'lab:ntext',
            //'rad:ntext',
            //'penunjang:ntext',
            //'tes:ntext',
            //'pemeriksaan:ntext',
            //'diagnosis',
            //'diagnosisbdg',
            //'permasalahan:ntext',
            //'terapi:ntext',
            //'tindakan:ntext',
            //'edukasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PenilaianMedisRalanMata $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
