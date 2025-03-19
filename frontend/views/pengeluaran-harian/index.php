<?php

use frontend\models\PengeluaranHarian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengeluaranHarianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengeluaran Harians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-harian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengeluaran Harian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_keluar',
            'tanggal',
            'kode_kategori',
            'biaya',
            'nip',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengeluaranHarian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_keluar' => $model->no_keluar]);
                 }
            ],
        ],
    ]); ?>


</div>
