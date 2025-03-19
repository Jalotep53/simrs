<?php

use frontend\models\UtdPenggunaanPenunjangDonor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\modelsUtdPenggunaanPenunjangDonorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Penggunaan Penunjang Donors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-penggunaan-penunjang-donor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Penggunaan Penunjang Donor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_donor',
            'kode_brng',
            'jml',
            'harga',
            'total',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdPenggunaanPenunjangDonor $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_donor' => $model->no_donor, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
