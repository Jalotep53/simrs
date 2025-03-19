<?php

use frontend\models\SuratPemesananNonMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananNonMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Pemesanan Non Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pemesanan-non-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Pemesanan Non Medis', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, SuratPemesananNonMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pemesanan' => $model->no_pemesanan]);
                 }
            ],
        ],
    ]); ?>


</div>
