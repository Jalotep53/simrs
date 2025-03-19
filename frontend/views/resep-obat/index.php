<?php

use frontend\models\ResepObat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ResepObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Resep Obats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resep Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_resep',
            'tgl_perawatan',
            'jam',
            'no_rawat',
            'kd_dokter',
            //'tgl_peresepan',
            //'jam_peresepan',
            //'status',
            //'tgl_penyerahan',
            //'jam_penyerahan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ResepObat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_resep' => $model->no_resep]);
                 }
            ],
        ],
    ]); ?>


</div>
