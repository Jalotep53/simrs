<?php

use frontend\models\SetHargaObatRalan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetHargaObatRalanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Harga Obat Ralans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-harga-obat-ralan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Harga Obat Ralan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_pj',
            'hargajual',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetHargaObatRalan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_pj' => $model->kd_pj]);
                 }
            ],
        ],
    ]); ?>


</div>
