<?php

use frontend\models\PemasukanLain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PemasukanLainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pemasukan Lains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemasukan-lain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pemasukan Lain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_masuk',
            'tanggal',
            'kode_kategori',
            'besar',
            'nip',
            //'keterangan',
            //'keperluan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PemasukanLain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_masuk' => $model->no_masuk]);
                 }
            ],
        ],
    ]); ?>


</div>
