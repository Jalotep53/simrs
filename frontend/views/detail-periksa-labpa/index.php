<?php

use frontend\models\DetailPeriksaLabpa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DetailPeriksaLabpaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Periksa Labpas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-periksa-labpa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detail Periksa Labpa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_jenis_prw',
            'tgl_periksa',
            'jam',
            'diagnosa_klinik',
            //'makroskopik',
            //'mikroskopik',
            //'kesimpulan',
            //'kesan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailPeriksaLabpa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'kd_jenis_prw' => $model->kd_jenis_prw, 'tgl_periksa' => $model->tgl_periksa, 'jam' => $model->jam]);
                 }
            ],
        ],
    ]); ?>


</div>
