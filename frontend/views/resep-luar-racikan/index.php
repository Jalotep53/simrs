<?php

use frontend\models\ResepLuarRacikan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepLuarRacikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Luar Racikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-luar-racikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Luar Racikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'no_racik',
            'nama_racik',
            'kd_racik',
            'jml_dr',
            //'aturan_pakai',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepLuarRacikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep, 'no_racik' => $model->no_racik]);
                 }
            ],
        ],
    ]); ?>


</div>
