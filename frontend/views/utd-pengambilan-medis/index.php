<?php

use frontend\models\UtdPengambilanMedis;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanMedisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Pengambilan Medis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-pengambilan-medis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Pengambilan Medis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'jml',
            'hargabeli',
            'total',
            'kd_bangsal_dr',
            //'tanggal',
            //'keterangan',
            //'no_batch',
            //'no_faktur',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPengambilanMedis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng, 'tanggal' => $model->tanggal, 'no_batch' => $model->no_batch, 'no_faktur' => $model->no_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>
