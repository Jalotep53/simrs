<?php

use frontend\models\SkriningGizi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SkriningGiziSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Skrining Gizis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skrining-gizi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Skrining Gizi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'skrining_bb',
            'skrining_tb',
            'alergi',
            //'parameter_imt',
            //'skor_imt',
            //'parameter_bb',
            //'skor_bb',
            //'parameter_penyakit',
            //'skor_penyakit',
            //'skor_total',
            //'parameter_total',
            //'nip',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SkriningGizi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
