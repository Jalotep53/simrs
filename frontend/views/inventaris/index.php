<?php

use frontend\models\Inventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_inventaris',
            'kode_barang',
            'asal_barang',
            'tgl_pengadaan',
            'harga',
            //'status_barang',
            //'id_ruang',
            //'no_rak',
            //'no_box',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Inventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_inventaris' => $model->no_inventaris]);
                 }
            ],
        ],
    ]); ?>


</div>
