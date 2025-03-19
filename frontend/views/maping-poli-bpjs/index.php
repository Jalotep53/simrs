<?php

use frontend\models\MapingPoliBpjs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MapingPoliBpjsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maping Poli Bpjs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maping-poli-bpjs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Maping Poli Bpjs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_poli_rs',
            'kd_poli_bpjs',
            'nm_poli_bpjs',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MapingPoliBpjs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_poli_rs' => $model->kd_poli_rs]);
                 }
            ],
        ],
    ]); ?>


</div>
