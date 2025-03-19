<?php

use frontend\models\MasterTriaseSkala4;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTriaseSkala4Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Triase Skala4s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-triase-skala4-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Triase Skala4', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_pemeriksaan',
            'kode_skala4',
            'pengkajian_skala4',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterTriaseSkala4 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_skala4' => $model->kode_skala4]);
                 }
            ],
        ],
    ]); ?>


</div>
