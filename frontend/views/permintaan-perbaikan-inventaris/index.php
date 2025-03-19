<?php

use frontend\models\PermintaanPerbaikanInventaris;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanPerbaikanInventarisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Perbaikan Inventaris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-perbaikan-inventaris-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Perbaikan Inventaris', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'no_inventaris',
            'nik',
            'tanggal',
            'deskripsi_kerusakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanPerbaikanInventaris $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>
