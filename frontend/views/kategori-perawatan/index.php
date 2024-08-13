<?php

use frontend\models\KategoriPerawatan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KategoriPerawatanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategori Perawatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-perawatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kategori Perawatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_kategori',
            'nm_kategori',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KategoriPerawatan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_kategori' => $model->kd_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
