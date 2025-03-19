<?php

use frontend\models\JadwalTambahan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\JadwalTambahanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jadwal Tambahans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-tambahan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jadwal Tambahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tahun',
            'bulan',
            'h1',
            'h2',
            //'h3',
            //'h4',
            //'h5',
            //'h6',
            //'h7',
            //'h8',
            //'h9',
            //'h10',
            //'h11',
            //'h12',
            //'h13',
            //'h14',
            //'h15',
            //'h16',
            //'h17',
            //'h18',
            //'h19',
            //'h20',
            //'h21',
            //'h22',
            //'h23',
            //'h24',
            //'h25',
            //'h26',
            //'h27',
            //'h28',
            //'h29',
            //'h30',
            //'h31',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JadwalTambahan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
                 }
            ],
        ],
    ]); ?>


</div>
