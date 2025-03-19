<?php

use frontend\models\MapingPoliklinikPcare;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliklinikPcareSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Poliklinik Pcares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-poliklinik-pcare-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Poliklinik Pcare', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli_rs',
            'kd_poli_pcare',
            'nm_poli_pcare',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingPoliklinikPcare $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli_rs' => $model->kd_poli_rs]);
                 }
            ],
        ],
    ]); ?>


</div>
