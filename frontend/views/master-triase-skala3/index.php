<?php

use frontend\models\MasterTriaseSkala3;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala3Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Triase Skala3s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala3-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Triase Skala3', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pemeriksaan',
            'kode_skala3',
            'pengkajian_skala3',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterTriaseSkala3 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_skala3' => $model->kode_skala3]);
                 }
            ],
        ],
    ]); ?>


</div>
