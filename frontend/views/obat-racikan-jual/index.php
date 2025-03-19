<?php

use frontend\models\ObatRacikanJual;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatRacikanJualSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obat Racikan Juals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-racikan-jual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat Racikan Jual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_jual',
            'no_racik',
            'nama_racik',
            'kd_racik',
            'jml_dr',
            //'aturan_pakai',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatRacikanJual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik]);
                 }
            ],
        ],
    ]); ?>


</div>
