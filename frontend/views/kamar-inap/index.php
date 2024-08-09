<?php

use frontend\models\KamarInap;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\KamarInapSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kamar Inaps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-inap-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kamar Inap', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_rawat',
            'kd_kamar',
            'trf_kamar',
            'diagnosa_awal',
            'diagnosa_akhir',
            //'tgl_masuk',
            //'jam_masuk',
            //'tgl_keluar',
            //'jam_keluar',
            //'lama',
            //'ttl_biaya',
            //'stts_pulang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KamarInap $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_rawat' => $model->no_rawat, 'tgl_masuk' => $model->tgl_masuk, 'jam_masuk' => $model->jam_masuk]);
                 }
            ],
        ],
    ]); ?>


</div>
