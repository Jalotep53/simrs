<?php

use frontend\models\MppEvaluasiMasalah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\MppEvaluasiMasalahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mpp Evaluasi Masalahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mpp-evaluasi-masalah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mpp Evaluasi Masalah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kode_masalah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MppEvaluasiMasalah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal, 'kode_masalah' => $model->kode_masalah]);
                 }
            ],
        ],
    ]); ?>


</div>
