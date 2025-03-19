<?php

use frontend\models\Parkir;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ParkirSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Parkirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parkir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Parkir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nomer_kartu',
            'kd_parkir',
            'no_kendaraan',
            'tgl_masuk',
            //'jam_masuk',
            //'tgl_keluar',
            //'jam_keluar',
            //'lama_parkir',
            //'ttl_biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Parkir $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_kendaraan' => $model->no_kendaraan, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
                 }
            ],
        ],
    ]); ?>


</div>
