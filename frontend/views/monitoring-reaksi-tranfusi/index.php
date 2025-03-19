<?php

use frontend\models\MonitoringReaksiTranfusi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MonitoringReaksiTranfusiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Monitoring Reaksi Tranfusis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoring-reaksi-tranfusi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Monitoring Reaksi Tranfusi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_perawatan',
            'jam_rawat',
            'produk_darah',
            'no_kantong',
            //'lokasi_insersi',
            //'td',
            //'hr',
            //'rr',
            //'suhu',
            //'jenis_reaksi_alergi',
            //'keterangan',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MonitoringReaksiTranfusi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_perawatan' => $model->tgl_perawatan, 'jam_rawat' => $model->jam_rawat]);
                 }
            ],
        ],
    ]); ?>


</div>
