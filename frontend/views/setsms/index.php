<?php

use frontend\models\Setsms;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetsmsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Setsms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setsms-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Setsms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode_sms',
            'sintax_balasan:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Setsms $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode_sms' => $model->kode_sms]);
                 }
            ],
        ],
    ]); ?>


</div>
