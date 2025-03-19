<?php

use frontend\models\InventarisKategori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InventarisKategoriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Inventaris Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventaris-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventaris Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kategori',
            'nama_kategori',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InventarisKategori $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kategori' => $model->id_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
