<?php

use frontend\models\Hemodialisa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\HemodialisaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hemodialisas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hemodialisa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hemodialisa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'tanggal',
            'kd_dokter',
            'lama',
            'akses',
            //'dialist',
            //'transfusi',
            //'penarikan',
            //'qb',
            //'qd',
            //'ureum',
            //'hb',
            //'hbsag',
            //'creatinin',
            //'hiv',
            //'hcv',
            //'lain',
            //'kd_penyakit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Hemodialisa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tanggal' => $model->tanggal]);
                 }
            ],
        ],
    ]); ?>


</div>
