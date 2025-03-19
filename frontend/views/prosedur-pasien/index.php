<?php

use frontend\models\ProsedurPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ProsedurPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prosedur Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prosedur-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prosedur Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kode',
            'status',
            'prioritas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProsedurPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kode' => $model->kode, 'status' => $model->status]);
                 }
            ],
        ],
    ]); ?>


</div>
