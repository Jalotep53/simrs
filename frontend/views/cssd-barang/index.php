<?php

use frontend\models\CssdBarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CssdBarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cssd Barangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cssd-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cssd Barang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_inventaris',
            'jenis_barang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CssdBarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_inventaris' => $model->no_inventaris]);
                 }
            ],
        ],
    ]); ?>


</div>
