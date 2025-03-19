<?php

use frontend\models\DetailPengeluaranObatBhp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPengeluaranObatBhpSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Pengeluaran Obat Bhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-pengeluaran-obat-bhp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Pengeluaran Obat Bhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_keluar',
            'kode_brng',
            'kode_sat',
            'no_batch',
            'jumlah',
            //'harga_beli',
            //'total',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPengeluaranObatBhp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_keluar' => $model->no_keluar, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
