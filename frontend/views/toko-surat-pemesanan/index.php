<?php

use frontend\models\TokoSuratPemesanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokoSuratPemesananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Toko Surat Pemesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="toko-surat-pemesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Toko Surat Pemesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_pemesanan',
            'kode_suplier',
            'nip',
            'tanggal',
            'subtotal',
            //'potongan',
            //'total',
            //'ppn',
            //'meterai',
            //'tagihan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TokoSuratPemesanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pemesanan' => $model->no_pemesanan]);
                 }
            ],
        ],
    ]); ?>


</div>
