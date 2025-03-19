<?php

use frontend\models\PerpustakaanBayarDenda;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBayarDendaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Bayar Dendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-bayar-denda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Bayar Denda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tgl_denda',
            'no_anggota',
            'no_inventaris',
            'kode_denda',
            'besar_denda',
            //'keterangan_denda',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanBayarDenda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tgl_denda' => $model->tgl_denda, 'no_anggota' => $model->no_anggota, 'no_inventaris' => $model->no_inventaris, 'kode_denda' => $model->kode_denda]);
                 }
            ],
        ],
    ]); ?>


</div>
