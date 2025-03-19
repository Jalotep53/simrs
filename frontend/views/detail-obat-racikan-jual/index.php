<?php

use frontend\models\DetailObatRacikanJual;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailObatRacikanJualSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Obat Racikan Juals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-obat-racikan-jual-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Obat Racikan Jual', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nota_jual',
            'no_racik',
            'kode_brng',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailObatRacikanJual $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nota_jual' => $model->nota_jual, 'no_racik' => $model->no_racik, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
