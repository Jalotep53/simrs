<?php

use frontend\models\PermintaanLabmb;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PermintaanLabmbSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permintaan Labmbs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permintaan-labmb-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permintaan Labmb', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, PermintaanLabmb $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'noorder' => $model->noorder]);
                 }
            ],
        ],
    ]); ?>


</div>
