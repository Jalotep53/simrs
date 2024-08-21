<?php

use frontend\models\DetailPemberianObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPemberianObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Pemberian Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pemberian-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Pemberian Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_perawatan',
            'jam',
            'no_rawat',
            'kode_brng',
            'h_beli',
            //'biaya_obat',
            //'jml',
            //'embalase',
            //'tuslah',
            //'total',
            //'status',
            //'kd_bangsal',
            //'no_batch',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPemberianObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_perawatan' => $model->tgl_perawatan, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
