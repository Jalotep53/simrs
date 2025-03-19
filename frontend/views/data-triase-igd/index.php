<?php

use frontend\models\DataTriaseIgd;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DataTriaseIgdSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Triase Igds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-triase-igd-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Triase Igd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_kunjungan',
            'cara_masuk',
            'alat_transportasi',
            'alasan_kedatangan',
            //'keterangan_kedatangan',
            //'kode_kasus',
            //'tekanan_darah',
            //'nadi',
            //'pernapasan',
            //'suhu',
            //'saturasi_o2',
            //'nyeri',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataTriaseIgd $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
