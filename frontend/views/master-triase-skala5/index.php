<?php

use frontend\models\MasterTriaseSkala5;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala5Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Triase Skala5s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala5-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Triase Skala5', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pemeriksaan',
            'kode_skala5',
            'pengkajian_skala5',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterTriaseSkala5 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_skala5' => $model->kode_skala5]);
                 }
            ],
        ],
    ]); ?>


</div>
