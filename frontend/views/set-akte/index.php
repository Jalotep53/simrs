<?php

use frontend\models\SetAkte;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkteSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Aktes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akte-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Akte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'bulan',
            'pendapatan_akte',
            'persen_rs',
            'bagian_rs',
            //'persen_kry',
            //'bagian_kry',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetAkte $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
                 }
            ],
        ],
    ]); ?>


</div>
