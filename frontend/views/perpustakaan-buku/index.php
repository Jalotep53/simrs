<?php

use frontend\models\PerpustakaanBuku;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanBukuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Bukus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-buku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_buku',
            'judul_buku',
            'jml_halaman',
            'kode_penerbit',
            'kode_pengarang',
            //'thn_terbit',
            //'isbn',
            //'id_kategori',
            //'id_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanBuku $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_buku' => $model->kode_buku]);
                 }
            ],
        ],
    ]); ?>


</div>
