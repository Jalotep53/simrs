<?php

use frontend\models\ResepPulang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepPulangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Pulangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-pulang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Pulang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode_brng',
            'jml_barang',
            'harga',
            'total',
            //'dosis',
            //'tanggal',
            //'jam',
            //'kd_bangsal',
            //'no_batch',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepPulang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'jam' => $model->jam, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
