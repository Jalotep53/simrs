<?php

use frontend\models\KategoriPengeluaranHarian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPengeluaranHarianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Pengeluaran Harians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pengeluaran-harian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Pengeluaran Harian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_kategori',
            'nama_kategori',
            'kd_rek',
            'kd_rek2',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KategoriPengeluaranHarian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kategori' => $model->kode_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
