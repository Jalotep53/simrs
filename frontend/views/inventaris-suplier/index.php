<?php

use frontend\models\InventarisSuplier;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisSuplierSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Supliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-suplier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Suplier', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, InventarisSuplier $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_suplier' => $model->kode_suplier]);
                 }
            ],
        ],
    ]); ?>


</div>
