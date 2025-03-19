<?php

use frontend\models\StokObatPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\StokObatPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Stok Obat Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-obat-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stok Obat Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanggal',
            'jam',
            'no_rawat',
            'kode_brng',
            'jumlah',
            //'kd_bangsal',
            //'no_batch',
            //'no_faktur',
            //'aturan_pakai',
            //'jam00',
            //'jam01',
            //'jam02',
            //'jam03',
            //'jam04',
            //'jam05',
            //'jam06',
            //'jam07',
            //'jam08',
            //'jam09',
            //'jam10',
            //'jam11',
            //'jam12',
            //'jam13',
            //'jam14',
            //'jam15',
            //'jam16',
            //'jam17',
            //'jam18',
            //'jam19',
            //'jam20',
            //'jam21',
            //'jam22',
            //'jam23',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, StokObatPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
