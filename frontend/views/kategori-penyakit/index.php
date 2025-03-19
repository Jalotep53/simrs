<?php

use frontend\models\KategoriPenyakit;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPenyakitSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Penyakits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-penyakit-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Penyakit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_ktg',
            'nm_kategori',
            'ciri_umum',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KategoriPenyakit $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_ktg' => $model->kd_ktg]);
                 }
            ],
        ],
    ]); ?>


</div>
