<?php

use frontend\models\DetailhibahObatBhp;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailhibahObatBhpSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detailhibah Obat Bhps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailhibah-obat-bhp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detailhibah Obat Bhp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_hibah',
            'kode_brng',
            'kode_sat',
            'jumlah',
            'h_hibah',
            //'subtotalhibah',
            //'h_diakui',
            //'subtotaldiakui',
            //'no_batch',
            //'jumlah2',
            //'kadaluarsa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailhibahObatBhp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_hibah' => $model->no_hibah, 'kode_brng' => $model->kode_brng, 'no_batch' => $model->no_batch]);
                 }
            ],
        ],
    ]); ?>


</div>
