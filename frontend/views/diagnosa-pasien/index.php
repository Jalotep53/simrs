<?php

use frontend\models\DiagnosaPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DiagnosaPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Diagnosa Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Diagnosa Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_penyakit',
            'status',
            'prioritas',
            'status_penyakit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DiagnosaPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_penyakit' => $model->kd_penyakit, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>
