<?php

use frontend\models\SetTahun;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetTahunSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Tahuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-tahun-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Tahun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'bulan',
            'jmlhr',
            'jmllbr',
            'normal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetTahun $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
                 }
            ],
        ],
    ]); ?>


</div>
