<?php

use frontend\models\SetWarung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SetWarungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Set Warungs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-warung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Set Warung', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tahun',
            'bulan',
            'pendapatan_warung',
            'persen_rs',
            'bagian_rs',
            //'persen_kry',
            //'bagian_kry',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SetWarung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'tahun' => $model->tahun, 'bulan' => $model->bulan]);
                 }
            ],
        ],
    ]); ?>


</div>
