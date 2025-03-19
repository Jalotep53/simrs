<?php

use frontend\models\PermintaanResepPulang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanResepPulangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Resep Pulangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-resep-pulang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Resep Pulang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_permintaan',
            'tgl_permintaan',
            'jam',
            'no_rawat',
            'kd_dokter',
            //'status',
            //'tgl_validasi',
            //'jam_validasi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PermintaanResepPulang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'no_permintaan' => $model->no_permintaan]);
                 }
            ],
        ],
    ]); ?>


</div>
