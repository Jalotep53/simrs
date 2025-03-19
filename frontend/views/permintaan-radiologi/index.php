<?php

use frontend\models\PermintaanRadiologi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanRadiologiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Radiologis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-radiologi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'noorder',
            'no_rawat',
            'tgl_permintaan',
            'jam_permintaan',
            'tgl_sampel',
            //'jam_sampel',
            //'tgl_hasil',
            //'jam_hasil',
            //'dokter_perujuk',
            //'status',
            //'informasi_tambahan',
            //'diagnosa_klinis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanRadiologi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder]);
                 }
            ],
        ],
    ]); ?>


</div>
