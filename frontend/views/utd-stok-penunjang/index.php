<?php

use frontend\models\UtdStokPenunjang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\UtdStokPenunjangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Utd Stok Penunjangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-stok-penunjang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Utd Stok Penunjang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_brng',
            'stok',
            'hargaterakhir',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UtdStokPenunjang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_brng' => $model->kode_brng]);
                 }
            ],
        ],
    ]); ?>


</div>
