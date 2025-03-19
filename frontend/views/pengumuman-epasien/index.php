<?php

use frontend\models\PengumumanEpasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PengumumanEpasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengumuman Epasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-epasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pengumuman Epasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nik',
            'tanggal',
            'pengumuman',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PengumumanEpasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nik' => $model->nik, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
