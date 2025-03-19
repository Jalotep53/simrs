<?php

use frontend\models\Rekeningtahun;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\RekeningtahunSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rekeningtahuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekeningtahun-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekeningtahun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'thn',
            'kd_rek',
            'saldo_awal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rekeningtahun $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'thn' => $model->thn, 'kd_rek' => $model->kd_rek]);
                 }
            ],
        ],
    ]); ?>


</div>
