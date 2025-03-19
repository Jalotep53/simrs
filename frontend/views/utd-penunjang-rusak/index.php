<?php

use frontend\models\UtdPenunjangRusak;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPenunjangRusakSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Penunjang Rusaks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penunjang-rusak-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Penunjang Rusak', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'jml',
            'harga',
            'total',
            'nip',
            //'tanggal',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPenunjangRusak $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng, 'nip' => $model->nip, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
