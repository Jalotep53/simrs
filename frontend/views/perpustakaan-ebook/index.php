<?php

use frontend\models\PerpustakaanEbook;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PerpustakaanEbookSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Perpustakaan Ebooks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perpustakaan-ebook-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Perpustakaan Ebook', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_ebook',
            'judul_ebook',
            'jml_halaman',
            'kode_penerbit',
            'kode_pengarang',
            //'thn_terbit',
            //'id_kategori',
            //'id_jenis',
            //'berkas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PerpustakaanEbook $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_ebook' => $model->kode_ebook]);
                 }
            ],
        ],
    ]); ?>


</div>
