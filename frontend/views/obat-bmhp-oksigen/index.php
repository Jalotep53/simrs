<?php

use frontend\models\ObatBmhpOksigen;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ObatBmhpOksigenSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Obat Bmhp Oksigens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-bmhp-oksigen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Obat Bmhp Oksigen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
             [
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'label' => 'Nama Barang',
                 'value' => function ($data) {
                
                return $data->barang->nama_brng; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
                    [
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'label' => 'Kategori Barang',
                 'value' => function ($data) {
                
                return $data->kategori->nama; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
            
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ObatBmhpOksigen $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
