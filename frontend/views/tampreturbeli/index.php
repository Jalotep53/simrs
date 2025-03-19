<?php

use frontend\models\Tampreturbeli;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TampreturbeliSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tampreturbelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tampreturbeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tampreturbeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_faktur',
            'kode_brng',
            'nama_brng',
            'satuan',
            'h_beli',
            //'jml_beli',
            //'h_retur',
            //'jml_retur',
            //'total',
            //'no_batch',
            //'jml_retur2',
            //'kadaluarsa',
            //'petugas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tampreturbeli $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_faktur' => $model->no_faktur, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
