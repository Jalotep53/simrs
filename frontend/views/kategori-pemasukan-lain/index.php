<?php

use frontend\models\KategoriPemasukanLain;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPemasukanLainSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Pemasukan Lains';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-pemasukan-lain-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Pemasukan Lain', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, KategoriPemasukanLain $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_kategori' => $model->kode_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
