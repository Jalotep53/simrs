<?php

use frontend\models\PemeliharaanInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemeliharaan Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeliharaan-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemeliharaan Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_inventaris',
            'tanggal',
            'uraian_kegiatan',
            'nip',
            'pelaksana',
            //'biaya',
            //'jenis_pemeliharaan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemeliharaanInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_inventaris' => $model->no_inventaris, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
