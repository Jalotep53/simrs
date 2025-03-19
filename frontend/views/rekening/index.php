<?php

use frontend\models\Rekening;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RekeningSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rekenings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekening-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekening', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_rek',
            'nm_rek',
            'tipe',
            'balance',
            'level',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rekening $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>
