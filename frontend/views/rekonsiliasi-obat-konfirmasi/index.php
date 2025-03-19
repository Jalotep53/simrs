<?php

use frontend\models\RekonsiliasiObatKonfirmasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RekonsiliasiObatKonfirmasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rekonsiliasi Obat Konfirmasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekonsiliasi-obat-konfirmasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekonsiliasi Obat Konfirmasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rekonsiliasi',
            'diterima_farmasi',
            'dikonfirmasi_apoteker',
            'nip',
            'diserahkan_pasien',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, RekonsiliasiObatKonfirmasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rekonsiliasi' => $model->no_rekonsiliasi]);
                 }
            ],
        ],
    ]); ?>


</div>
