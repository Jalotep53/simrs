<?php

use frontend\models\SaranKesanLab;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\SaranKesanLabSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Saran Kesan Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saran-kesan-lab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Saran Kesan Lab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tgl_periksa',
            'jam',
            'saran',
            'kesan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SaranKesanLab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
                 }
            ],
        ],
    ]); ?>


</div>
