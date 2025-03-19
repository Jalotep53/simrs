<?php

use frontend\models\SuratPemesananMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPemesananMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Surat Pemesanan Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pemesanan-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Pemesanan Medis', ['create'], ['class' => 'btn btn-success']) ?>
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
            'total1',
            //'potongan',
            //'total2',
            //'ppn',
            //'meterai',
            //'tagihan',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SuratPemesananMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_pemesanan' => $model->no_pemesanan]);
                 }
            ],
        ],
    ]); ?>


</div>
