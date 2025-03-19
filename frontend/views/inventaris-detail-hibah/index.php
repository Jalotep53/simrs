<?php

use frontend\models\InventarisDetailHibah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisDetailHibahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Detail Hibahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-detail-hibah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Detail Hibah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_hibah',
            'kode_barang',
            'jumlah',
            'h_hibah',
            'subtotalhibah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisDetailHibah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_hibah' => $model->no_hibah, 'kode_barang' => $model->kode_barang]);
                 }
            ],
        ],
    ]); ?>


</div>
