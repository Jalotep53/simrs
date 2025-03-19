<?php

use frontend\models\Tokojenisbarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TokojenisbarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tokojenisbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tokojenisbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tokojenisbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_jenis',
            'nm_jenis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tokojenisbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_jenis' => $model->kd_jenis]);
                 }
            ],
        ],
    ]); ?>


</div>
