<?php

use frontend\models\InventarisBarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisBarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_barang',
            'nama_barang',
            'jml_barang',
            'kode_produsen',
            'id_merk',
            //'thn_produksi',
            //'isbn',
            //'id_kategori',
            //'id_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisBarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_barang' => $model->kode_barang]);
                 }
            ],
        ],
    ]); ?>


</div>
