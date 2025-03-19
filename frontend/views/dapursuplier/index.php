<?php

use frontend\models\Dapursuplier;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DapursuplierSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dapursupliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dapursuplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dapursuplier', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_suplier',
            'nama_suplier',
            'alamat',
            'kota',
            'no_telp',
            //'nama_bank',
            //'rekening',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dapursuplier $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_suplier' => $model->kode_suplier]);
                 }
            ],
        ],
    ]); ?>


</div>
